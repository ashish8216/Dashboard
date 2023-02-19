<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faq;

class FaqController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Faq::orderBy('id', 'desc')
        ->get();
        return view('admin.faqs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.faqs.create');
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
            'sub_title'=>'required',
        ]);
        

        $blog = new Faq([
            'title' => $request->get('title'), 
            'sub_title' => $request->get('sub_title'),
        ]);
        
        $blog->save();

        return redirect('/admin/faqs')
        ->with('success',' Faq successfully.');
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
        
        $blog = Faq::find($id);
         return view('admin.faqs.edit',compact('blog'));
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
            'sub_title'=>'required',
        ]);
       
        $blog = Faq::find($id);
        $blog->title = $request->get('title'); 
        $blog->sub_title = $request->get('sub_title');
        $blog->save();
  
        return redirect('/admin/faqs')
        ->with('success','Faq updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Faq::find($id);
        $blog->delete();
  
         return redirect('/admin/faqs')
         ->with('success','faq deleted successfully');
    }
}
