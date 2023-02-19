<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post_Categorie;
use App\Models\Page_image;

class Page_imageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Page_image::orderBy('id', 'desc')
        ->get();
        return view('admin.page_images.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $blog_cat = Post_Categorie::all();
        return view('admin.page_images.create', compact('blog_cat'));
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
            'top_botton' => 'required',
            'image' =>  'required',
            'page_id' => 'required',
        ]);
    

        $blog = new Page_image([
            'image' =>  $request->get('image'),
            'page_id'  =>  $request->get('page_id'),
            'top_botton'  =>  $request->get('top_botton'),
        ]);
        
        $blog->save();

        return redirect('/admin/page_images')
        ->with('success','image successfully.');
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
        
        $blog_cat = Post_Categorie::all();
        $blog = Page_image::find($id);
         return view('admin.page_images.edit',compact('blog', 'blog_cat'));
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
            'top_botton' => 'required',
            'page_id' => 'required',
        ]);
    

        $blog = Page_image::find($id);
        $blog->image =  $request->get('image');
        $blog->page_id  =  $request->get('page_id');
        $blog->top_botton = $request->get('top_botton');
        $blog->save();
        
        return redirect('/admin/page_images')
        ->with('success','image updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $blog = Page_image::find($id);
        $blog->delete();
  
         return redirect('/admin/page_images')
         ->with('success','image deleted successfully');
    }
}
