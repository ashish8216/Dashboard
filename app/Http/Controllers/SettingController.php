<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;



class SettingController extends Controller
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
                $setting = Setting::find($id);
         return view('admin.settings.edit',compact('setting'));

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
        
        $setting = Setting::find($id);
        $setting->name = $request->get('name');
        $setting->email = $request->get('email');
        $setting->logo = $request->get('logo');
        $setting->mobile_number = $request->get('mobile_number');
        $setting->woking_hour = $request->get('woking_hour');
        $setting->page_image = $request->get('page_image');
        $setting->google_maps = $request->get('google_maps');
        $setting->address = $request->get('address');
        $setting->address2 = $request->get('address2');
        $setting->facebook = $request->get('facebook');
        $setting->twitter = $request->get('twitter');
        $setting->instagram = $request->get('instagram');
        $setting->tiktok = $request->get('tiktok');
        $setting->save();
  
        return redirect('/admin/settings/1/edit')
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
