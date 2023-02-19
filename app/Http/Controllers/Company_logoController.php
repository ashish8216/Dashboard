<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company_logo;

class  Company_logoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Company_logo::orderBy('id', 'desc')
        ->get();
        return view('admin.company_logos.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.company_logos.create');
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
        ]);
        
        
        $blog = new Company_logo([
            'image' =>  $request->get('image'),
        ]);
        
        $blog->save();

        return redirect('/admin/company_logos')
        ->with('success','Company logo successfully.');
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
        
        $blog_cat = Gallery_categorie::all();
        $blog = Gallery::find($id);
         return view('admin.gallerys.edit',compact('blog', 'blog_cat'));
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
            'image' =>  'required',
        ]);
        
        $blog = Company_logo::find($id);
        $blog->image =  $request->get('image');
        $blog->save();
  
        return redirect('/admin/company_logos')
        ->with('success','Company logo updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Company_logo::find($id);
        $blog->delete();
  
         return redirect('/admin/company_logos')
         ->with('success','Company logo deleted successfully');
    }
}
