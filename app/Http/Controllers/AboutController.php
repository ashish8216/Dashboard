<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;



class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
                $setting = About::find($id);
         return view('admin.abouts.edit',compact('setting'));

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
        $setting = About::find($id);
        $setting->image = $request->get('image');
        $setting->image2 = $request->get('image2');
        $setting->image3 = $request->get('image3');
        $setting->youtube = $request->get('youtube');
        $setting->title = $request->get('title');
        $setting->title2 = $request->get('title2');
        $setting->title3 = $request->get('title3');
        $setting->title4 = $request->get('title4');
        $setting->title5 = $request->get('title5');
        $setting->title6 = $request->get('title6');
        $setting->save();
  
        return redirect('/admin/abouts/1/edit')
        ->with('success','updated successfully');
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
