<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Teacher::orderBy('id', 'desc')
        ->get();
        return view('admin.teachers.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.teachers.create');
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
            'image' =>  'required',
            'post' => 'required',
        ]);
        
        
        $blog = new Teacher([
            'name' => $request->get('name'),
            'image' => $request->get('image'),
            'post' => $request->get('post'),
            'email' => $request->get('email'),
            'mobile_number' => $request->get('mobile_number'),
            'facebook' => $request->get('facebook'),
            'twitter' => $request->get('twitter'),
            'skype' => $request->get('skype'),
        ]);
        
        $blog->save();

        return redirect('/admin/teachers')
        ->with('success',' Teachers successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response!
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
        
        $blog = Teacher::find($id);
         return view('admin.teachers.edit',compact('blog'));
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
            'name' => 'required',
            'post' => 'required',
        ]);

        $blog = Teacher::find($id);
        $blog->name = $request->get('name');
        $blog->image =  $request->get('image');
        $blog->post = $request->get('post');
        $blog->email = $request->get('email');
        $blog->mobile_number = $request->get('mobile_number');
        $blog->facebook = $request->get('facebook');
        $blog->twitter = $request->get('twitter');
        $blog->skype = $request->get('skype');
        $blog->save();
  
        return redirect('/admin/teachers')
        ->with('success','Teacher Categories updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Teacher::find($id);
        $blog->delete();
  
         return redirect('/admin/teachers')
         ->with('success','Teacher deleted successfully');
    }
}
