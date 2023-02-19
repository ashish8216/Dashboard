<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partner_logo;

class  Partner_logoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Partner_logo::orderBy('id', 'desc')
        ->get();
        return view('admin.partner_logos.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.partner_logos.create');
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
        
        $blog = new Partner_logo([
            'image' =>  $request->get('image'),
        ]);
        
        $blog->save();

        return redirect('/admin/partner_logos')
        ->with('success','Our Partner successfully.');
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
        
        $blog = Partner_logo::find($id);
        $blog->image = $request->get('image');
        $blog->save();
  
        return redirect('/admin/partner_logos')
        ->with('success','Our parent updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Partner_logo::find($id);
        $blog->delete();
  
         return redirect('/admin/partner_logos')
         ->with('success','Our parent deleted successfully');
    }
}
