<?php

namespace App\Http\Controllers;

use App\Models\Services;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services  = Services::all();
        return view('admin.servicess.index',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.servicess.create');
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
        ]);
 
        
        
        $services = new Services([
            'title'=>$_POST['title'], 
            'description'=> $request->get('description'), 
            'image'=>$request->get('image'), 
        ]);
        $services->save();

        return redirect('/admin/servicess')
        ->with('success','Services created successfully.');
        
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
        $services = Services::find($id);
        return view('admin.servicess.edit', compact('services'));
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
        ]);
        
        
        $service = Services::find($id);
        $service->title = $request->get('title');
        $service->image = $request->get('image');
        $service->description = $request->get('description');

        $service->save();
  
        return redirect('/admin/servicess')
        ->with('success','Services updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $slideshow = Services::find($id);
        $slideshow->delete();
  
        return redirect('/admin/servicess')
        ->with('success','Services deleted successfully');
    }

}
