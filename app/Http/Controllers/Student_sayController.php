<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student_say;


class Student_sayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Student_say::orderBy('id', 'desc')
        ->get();
        return view('admin.student_says.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.student_says.create');
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
            'show_desction' => 'required',
        ]);
        
        $blog = new Student_say([
            'title' => $request->get('title'), 
            'image' => $request->get('image'),
            'desction' => $request->get('desction'),
            'show_desction' => $request->get('show_desction'),
        ]);
        
        $blog->save();

        return redirect('/admin/student_says')
        ->with('success','  successfully.');
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
        
        $blog = Student_say::find($id);
         return view('admin.student_says.edit',compact('blog'));
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
            'show_desction' => 'required',
        ]);

        
        $blog = Student_say::find($id);
        $blog->title = $request->get('title');
        $blog->image = $request->get('image');
        $blog->desction = $request->get('desction');
        $blog->show_desction = $request->get('show_desction');
        $blog->save();
  
        return redirect('/admin/student_says')
        ->with('success',' updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Student_say::find($id);!
        $blog->delete();
  
         return redirect('/admin/student_says')
         ->with('success','testimonals deleted successfully');
    }
}
