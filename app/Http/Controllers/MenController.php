<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class MenController extends Controller
{
   public function index(){
        $adds= Menu::all();
        return view('admin.mens.index',compact('adds'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $allMenus = Menu::pluck('title','id')->all();
        $blog = Menu::find($id);
         return view('admin.mens.edit',compact('blog','allMenus'));
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
           'url' => 'required',
        ]);
    

        $blog = Menu::find($id);
        $blog->title =  $request->get('title');
        $blog->url  =  $request->get('url');
        $blog->parent_id = $request->get('parent_id');
        $blog->save();
        
        return redirect('/admin/men')
        ->with('success','Menus updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $blog = Menu::find($id);
        $blog->delete();
  
         return redirect('/admin/men')
         ->with('success','menus deleted successfully');
    }
}
