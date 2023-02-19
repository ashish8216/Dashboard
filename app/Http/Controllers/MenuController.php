<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
   public function index(){
        $menus = Menu::where('parent_id', '=', 0)->get();
        $allMenus = Menu::pluck('title','id')->all();
        $adds= Menu::all();
        return view('admin.menus.menuTreeview',compact('menus','allMenus','adds'));
    }

    public function store(Request $request)
    {
        $request->validate([
           'title' => 'required',
           'url' => 'required',
        ]);

        $input = $request->all();
        $input['parent_id'] = empty($input['parent_id']) ? 0 : $input['parent_id'];
        Menu::create($input);
        return back()->with('success', 'Menu added successfully.');
    }

    public function show()
    {
        $menus = Menu::where('parent_id', '=', 0)->get();
        return view('admin.menus.dynamicMenu',compact('menus'));
    }
}
