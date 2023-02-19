<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apply;
use App\Models\Blog;
use App\Models\Setting;
use App\Models\Menu;
use App\Models\Seo;
use App\Models\Link;
use App\Models\Features;
use App\Notifications\FromNotification;
use Illuminate\Support\Facades\Notification;
use App\Models\Email;

class ApplyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Apply::orderBy('id', 'desc')
        ->get();
        return view('admin.applys.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menus = Menu::where('parent_id', '=', 0)->get();
        $allMenus = Menu::pluck('title','id')->all();
        $settings = Setting::all();
        $seos = Seo::where('id', 1)->get();
        $featur = Features::all();
        $blog2s = Link::all();
        $galleerys = Blog::orderBy('id', 'desc')->limit(2)->get();
        return view('apply', compact('settings','menus','allMenus','seos','featur','blog2s','galleerys'));
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
            'image' =>  'required|mimes:jpeg,jpg,png,svg',
            'sex' => 'required',
            'birth' => 'required', 
            'parent' => 'required',
            'occupation' => 'required',
            'permanent_address' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'level'=> 'required',
            'stream'=> 'required',
            'gpa'=> 'required',
            'year'=> 'required',
        ]);
        
       $name ="";
        if ($file = $request->file('image')) 
         {      
            $name = time().$file->getClientOriginalName();
          $file->move(public_path('/image'),$name);         
            $input['name'] = $name;
        }
        
        $blog = new Apply([
            'name' => $request->get('name'),
            'image' =>  $name,
            'sex' => $request->get('sex'),
            'birth' => $request->get('birth'),
            'parent' => $request->get('parent'),
            'occupation' => $request->get('occupation'),
            'permanent_address'=> $request->get('permanent_address'),
            'mobile'=> $request->get('mobile'),
            'email'=> $request->get('email'),
            'level'=> $request->get('level'),
            'stream'=> $request->get('stream'),
            'gpa'=> $request->get('gpa'),
            'year'=> $request->get('year'),
            'yes'=> $request->get('yes'),
            'listening'=> $request->get('listening'),
            'reasing'=> $request->get('reasing'),
            'writing'=> $request->get('writing'),
            'speaking'=> $request->get('speaking'),
            'overall'=> $request->get('overall'),
            'nat'=> $request->get('nat'),
            'jlpt'=> $request->get('jlpt'),
            'top'=> $request->get('top'),
            'friends'=> $request->get('friends'),
            'relatives'=> $request->get('relatives'),
            'website'=> $request->get('website'),
            'facebook'=> $request->get('facebook'),
            'seminars'=> $request->get('seminars'),
            'walk_in'=> $request->get('walk_in'),
            'others'=> $request->get('others'),
            'comments'=> $request->get('comments'),
        ]);
        
        $blog->save();
        
        $user = Email::all();
        $details=[
            'title'=>$blog->name,
            'actionURL'=>url('/admin/applys/'.$blog->id),
            
        ];
        
        Notification::send($user,new FromNotification($details));
        
        return redirect('apply')
        ->with('success',' successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $member = Apply::find($id);
         return view('admin.applys.show',compact('member'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
         //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Apply::find($id);
        $blog->delete();
  
         return redirect('/admin/applys')
         ->with('success',' deleted successfully');
    }
}
