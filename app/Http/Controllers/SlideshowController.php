<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slideshow;

class SlideshowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Slideshow::orderBy('id', 'desc')
        ->get();
        return view('admin.slideshows.index',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slideshows.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       request()->validate([
            'image' =>  'required',
        ]);
        

        $blog = new Slideshow([
            
            'image' =>  $request->get('image'),
            
        ]);
        
        $blog->save();

        return redirect('/admin/slideshows')
        ->with('success','successfully.');
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
        // $photo = Photo::find($id);
        // return view('admin.photos.edit',compact('photo'));
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
    //     $request->validate([
    //         'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    // ]);
            
    //     if ($files = $request->file('image')) {
    //         $destinationPath = 'public/image/'; // upload path
    //         $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
    //         $files->move($destinationPath, $profileImage);
    //         $update['image'] = "$profileImage";
    //     }
    //         Photo::where('id',$id)->update($update);
    //         return Redirect::to('/admin/photos')
    //         ->with('success','Photo updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $photo = Slideshow::find($id);
        $photo->delete();
  
         return redirect('/admin/slideshows')
         ->with('success','Photo deleted successfully');
    }
}
