<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery_categorie;

class Gallery_categorieController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Gallery_categorie::orderBy('id', 'desc')
        ->get();
        return view('admin.gallery_categories.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.gallery_categories.create');
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
            'image' => 'required|mimes:jpeg,jpg,png,svg',
        ]);
        
        $name ="";
        if ($file = $request->file('image')) 
         {      
            $name = time().$file->getClientOriginalName();
          $file->move(public_path('/image'),$name);         
            $input['name'] = $name;
        }
        
        $blog = new Gallery_categorie([
            'name' => $request->get('name'),
            'image' =>  $name,
        ]);
        
        $blog->save();

        return redirect('/admin/gallery_categories')
        ->with('success',' Gallery Categories successfully.');
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
        
        $blog = Gallery_categorie::find($id);
         return view('admin.gallery_categories.edit',compact('blog'));
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
        $blog = Gallery_categorie::find($id);
        $name =$blog->image;
        if ($file = $request->file('image')) 
         {      
            $name = time().$file->getClientOriginalName();
           $file->move(public_path('/image'),$name);          
            $input['name'] = $name;
           
        }
        $blog = Gallery_categorie::find($id);
        $blog->name = $request->get('name');
        $blog->image = $name;
        $blog->save();
  
        return redirect('/admin/gallery_categories')
        ->with('success','Gallery Categories updated successfully');
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
