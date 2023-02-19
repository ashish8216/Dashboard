<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Video::orderBy('id', 'desc')
        ->get();
        return view('admin.videos.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.videos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' =>  'required',
        ]);
        
        
        $blog = new Video([
            'title' => $request->get('title'),
            'image' => $request->get('image'),
            'video' => $request->get('video'), 
        ]);
        
        $blog->save();

        return redirect('/admin/videos')
        ->with('success','Videos successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Video::find($id);
         return view('admin.videos.edit',compact('blog'));
        
        }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $request->validate([
            'title' => 'required',
            'image' =>  'required',
        ]);
        
        
        $blog = Video::find($id);
         $blog->title = $request->get('title');
         $blog->image = $request->get('image');
         $blog->video = $request->get('video'); 
            
        $blog->save();

        return redirect('/admin/videos')
        ->with('success','Videos successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Video::find($id);
        $blog->delete();
  
         return redirect('/admin/videos')
         ->with('success','video deleted successfully');
    }
}
