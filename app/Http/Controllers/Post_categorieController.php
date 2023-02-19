<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post_Categorie;

class Post_categorieController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Post_Categorie::orderBy('id', 'desc')
        ->get();
        return view('admin.post_categories.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.post_categories.create');
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
        ]);
        

        $blog = new Post_Categorie([
            'name' => $request->get('name'),
            'desction' => $request->get('desction'), 
             'seo' =>  $request->get('seo'),
        ]);
        
        $blog->save();

        return redirect('/admin/post_categories')
        ->with('success',' Post Categories successfully.');
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
        
        $blog = Post_Categorie::find($id);
         return view('admin.post_categories.edit',compact('blog'));
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
       
        $blog = Post_Categorie::find($id);
        $blog->name = $request->get('name');
        $blog->desction = $request->get('desction');
         $blog->seo =  $request->get('seo');
        $blog->save();
  
        return redirect('/admin/post_categories')
        ->with('success','Post Categories updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
