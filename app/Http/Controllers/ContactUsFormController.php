<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Menu;
use App\Models\Setting;
use App\Models\Features;
use App\Models\Seo;
use App\Models\Services;
use App\Models\Link;
use App\Models\Blog;
use Mail;

class ContactUsFormController extends Controller {
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Contact::orderBy('id', 'desc')
        ->get();
        return view('admin.contacts.index', compact('blogs'));
    }

    
    // Create Contact Form
    public function createForm(Request $request) {
        $menus = Menu::where('parent_id', '=', 0)->get();
        $allMenus = Menu::pluck('title','id')->all();
        $settings = Setting::all();
         $seos = Seo::where('id', 3)->get();
        $services = Services::orderBy('id', 'asc')->limit(3)->get();
         $featur = Features::all();
         $blog2s = Link::all();
        $blogs = Blog::where('categorie', 2)->orderBy('id', 'desc')->limit(5)->get();
        $galleerys = Blog::orderBy('id', 'desc')->limit(2)->get();
      return view('suggested_contact', compact('settings', 'seos','blog2s','services','featur','menus','allMenus','blogs','galleerys'));
    }
    // Store Contact Form data
    public function ContactUsForm(Request $request) {
        // Form validation
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'subject'=>'required',
            'message' => 'required'
         ]);
        //  Store data in database
        Contact::create($request->all());
        //  Send mail to admin
        \Mail::send('mail', array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'subject' => $request->get('subject'),
            'user_query' => $request->get('message'),
            
        ), function($message) use ($request){
            $message->from($request->email);
            $message->to('info@iglobal.edu.np', 'Admin')->subject($request->get('subject'));
        });
        return back()->with('success', 'We have received your message and would like to thank you for writing to us.');
    }
}