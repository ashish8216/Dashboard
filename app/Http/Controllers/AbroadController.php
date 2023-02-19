<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Abroad;

class AbroadController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Abroad::orderBy('id', 'desc')
        ->get();
        return view('admin.abroads.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.abroads.create');
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
            'name' => 'required',
            'image' => 'required',
        ]);
        
        $blog = new Abroad([
            'name' => $request->get('name'),
            'desction' => $request->get('desction'), 
            'image' =>  $request->get('image'),
            'seo' =>  $request->get('seo'),
        ]);
        
        $blog->save();

        return redirect('/admin/abroads')
        ->with('success',' study Abroad successfully.');
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
        
        $blog = Abroad::find($id);
         return view('admin.abroads.edit',compact('blog'));
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
            'name' => 'required'

        ]);
     
        $blog = Abroad::find($id);
        $blog->name = $request->get('name');
        $blog->desction = $request->get('desction');
        $blog->image = $request->get('image');
        $blog->seo =  $request->get('seo');
        $blog->save();
  
        return redirect('/admin/abroads')
        ->with('success','study Aroads updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Abroad::find($id);
        $blog->delete();
  
         return redirect('/admin/abroads')
         ->with('success','study Aroads deleted successfully');
    }
}
