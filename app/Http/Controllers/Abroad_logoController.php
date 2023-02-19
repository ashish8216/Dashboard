<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Abroad_logo;
use App\Models\Abroad;

class Abroad_logoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Abroad_logo::orderBy('id', 'desc')
        ->get();
        $productssubcategories = Abroad::all();
        return view('admin.abroad_logos.index', compact('blogs','productssubcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $blog_cat = Abroad::all();
        return view('admin.abroad_logos.create', compact('blog_cat'));
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
            'image' =>  'required',
            'study' => 'required',
        ]);
    

        $blog = new Abroad_logo([
            'url' => $request->get('url'), 
            'image' =>  $request->get('image'),
            'rtocode' => $request->get('rtocode'),
            'cricos' => $request->get('cricos'),
            'study' => $request->get('study'), 
        ]);
        
        $blog->save();

        return redirect('/admin/abroad_logos')
        ->with('success',' Logo successfully.');
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
        
        $blog_cat = Abroad::all();
        $blog = Abroad_logo::find($id);
         return view('admin.abroad_logos.edit',compact('blog', 'blog_cat'));
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
            'study' => 'required',
        ]);

        
        $blog = Abroad_logo::find($id);
         $blog->url = $request->get('url');
         $blog->image =  $request->get('image');
         $blog->rtocode = $request->get('rtocode');
         $blog->cricos = $request->get('cricos');
         $blog->study = $request->get('study'); 
        $blog->save();
  
        return redirect('/admin/abroad_logos')
        ->with('success','logo updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $blog = Abroad_logo::find($id);
        $blog->delete();
  
         return redirect('/admin/abroad_logos')
         ->with('success','Logo deleted successfully');
    }
}
