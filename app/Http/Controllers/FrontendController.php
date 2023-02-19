<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Banner;
use App\Models\About;
use App\Models\Blog;
use App\Models\Comment;
use App\Models\CommentUser;
use App\Models\Popup;
use App\Models\Teacher;
use App\Models\Features;
use App\Models\Abroad;
use App\Models\Abroad_logo;
use App\Models\Video;
use App\Models\Student_say;
use App\Models\Gallery_categorie;
use App\Models\Post;
use App\Models\Page_image;
use App\Models\Menu;
use App\Models\Seo;
use App\Models\Partner_logo;
use App\Models\Company_logo;
use App\Models\Post_Categorie;
use App\Models\Blog_Categorie;
use App\Models\Gallery;
use App\Models\Download;
use App\Models\Faq;
use App\Models\Link;
use App\Models\Services;
use App\Models\Counter;
use App\Models\Popular_service;


class FrontendController extends Controller
{
    public function welcome()
    {
        $menus = Menu::where('parent_id', '=', 0)->get();
        $allMenus = Menu::pluck('title','id')->all();
        $settings = Setting::all();
        $featur = Features::all();
        $slideshows = Banner::all();
        $pop = Popular_service::all();
        $seos = Seo::where('id', 1)->get();
        $services = Services::orderBy('id', 'asc')->limit(3)->get();
        $logs = Company_logo::all();
        $blogs = Abroad::orderBy('id', 'desc')->limit(4)->get();
        $blog3s = Blog::orderBy('id', 'desc')->limit(3)->get();
        $blog2s = Link::all();
        $counter = Counter::all();
        $popup = Popup::where('categorie', 'Show')->get();
        $blog1s = Blog::where('categorie', 3)->orderBy('id', 'desc')->limit(4)->get();
        $post1 = Post_Categorie::where('id',1)->get();
        $post8 = Post_Categorie::where('id',8)->get();
        $post2 = Post_Categorie::where('id',2)->get();
        $post44 = Post_Categorie::where('id',44)->get();
        $galleerys = Blog::orderBy('id', 'desc')->limit(2)->get();
        $gallerys = Gallery::orderBy('id', 'desc')->limit(10)->get();
        $download = Faq::all();
        $about = About::all();
        $download1 = Faq::orderBy('id', 'asc')->limit(1)->get();
        $videos = Video::orderBy('id', 'desc')->limit(1)->get();
        $teachers = Teacher::all();
        $says = Student_say::all();
        $photos = Partner_logo::all();
    return view('welcome', compact('settings','pop','menus','about', 'counter','popup','seos','services','featur','photos','allMenus','slideshows','logs','blogs','galleerys','gallerys','download','download1','videos','teachers','says','post1','post8','post2','blog1s','blog2s','blog3s','post44'));
    }
    public function gallery()
    {
        $menus = Menu::where('parent_id', '=', 0)->get();
        $allMenus = Menu::pluck('title','id')->all();
        $settings = Setting::all();
         $seos = Seo::where('id', 7)->get();
        $featur = Features::all();
        $blog2s = Link::all();
        $blogs = Blog::where('categorie', 2)->orderBy('id', 'desc')->limit(5)->get();
        $galleerys = Blog::orderBy('id', 'desc')->limit(2)->get();
        $photos  = Gallery::orderBy('id', 'desc')->get();
    return view('gallery', compact('settings','seos','featur','blog2s','menus','allMenus','blogs','galleerys','photos'));
    }
    public function blog()
    {
        $menus = Menu::where('parent_id', '=', 0)->get();
        $allMenus = Menu::pluck('title','id')->all();
        $settings = Setting::all();
         $featur = Features::all();
          $seos = Seo::where('id', 8)->get();
         $blog2s = Link::all();
        $blogs = Blog::where('categorie', 2)->orderBy('id', 'desc')->limit(5)->get();
         $blog = Blog::all();
       $galleerys = Blog::orderBy('id', 'desc')->limit(2)->get();
        $gallerys = Blog::orderBy('id', 'desc')->paginate(21);
    return view('blog', compact('settings','featur','seos','blog2s','menus','allMenus','blogs','galleerys','gallerys','blog'));
    }
     public function blogbycategory($id)
    {
        $subercategory = Blog_Categorie::find($id);
        $menus = Menu::where('parent_id', '=', 0)->get();
        $allMenus = Menu::pluck('title','id')->all();
        $settings = Setting::all();
         $featur = Features::all();
          $seos = Seo::where('id', 8)->get();
         $blog2s = Link::all();
        $blogs = Blog::where('categorie', 2)->orderBy('id', 'desc')->limit(5)->get();
         $blog = Blog::all();
       $galleerys = Blog::orderBy('id', 'desc')->limit(2)->get();
        $gallerys = Blog::where('categorie', $id)->orderBy('id', 'desc')->paginate(21);
    return view('blog', compact('settings','subercategory','featur','seos','blog2s','menus','allMenus','blogs','galleerys','gallerys','blog'));
    }
    public function services()
    {
        $menus = Menu::where('parent_id', '=', 0)->get();
        $allMenus = Menu::pluck('title','id')->all();
        $settings = Setting::all();
         $seos = Seo::where('id', 2)->get();
        $services = Services::all();
         $featur = Features::all();
         $blog2s = Link::all();
        $blogs = Blog::where('categorie', 2)->orderBy('id', 'desc')->limit(5)->get();
       $galleerys = Blog::orderBy('id', 'desc')->limit(2)->get();
        $gallerys = Gallery::all();
        return view('services', compact('services','blog2s','seos','settings','featur','menus','allMenus','blogs','galleerys','gallerys'));
    }
    public function services_details($id)
    {
        $menus = Menu::where('parent_id', '=', 0)->get();
        $allMenus = Menu::pluck('title','id')->all();
        $settings = Setting::all();
        $blogs = Blog::where('categorie', 2)->orderBy('id', 'desc')->limit(5)->get();
        $oi = Services::find($id);
        $featur = Features::all();
        $blog2s = Link::all();
        $mrpcompanynames = Services::all();
        $galleerys = Gallery_categorie::orderBy('id', 'desc')->get();
        $lists = Blog::orderBy('id', 'desc')->limit(10)->get();
        $gallerys = Gallery::all();
    return view('services_details', compact('settings','blogs','blog2s','menus','featur','allMenus','mrpcompanynames','gallerys','galleerys','oi','lists'));
    }
    public function teachers()
    {
        $menus = Menu::where('parent_id', '=', 0)->get();
        $allMenus = Menu::pluck('title','id')->all();
        $settings = Setting::all();
         $featur = Features::all();
         $blog2s = Link::all();
          $seos = Seo::where('id', 4)->get();
        $team= Teacher::all();
        $blogs = Blog::where('categorie', 2)->orderBy('id', 'desc')->limit(5)->get();
        $galleerys = Blog::orderBy('id', 'desc')->limit(2)->get();
    return view('teachers', compact('settings','menus','blog2s','seos','featur','allMenus','blogs','galleerys','team'));
    }
    public function blog_details($id)
    {
        $notices = Blog::find($id);
        $menus = Menu::where('parent_id', '=', 0)->get();
        $allMenus = Menu::pluck('title','id')->all();
        $settings = Setting::all();
         $featur = Features::all();
         $comm = Comment::where('blog_id', $notices->id )->get();
         $blog2s = Link::all();
        $blogs = Blog::where('categorie', 2)->orderBy('id', 'desc')->limit(5)->get();
        $mrpcompanynames = Blog_Categorie::orderBy('id', 'desc')->get();
        $galleerys = Blog::orderBy('id', 'desc')->limit(2)->get();
        $lists = Blog::orderBy('id', 'desc')->limit(10)->get();;
    return view('blog_details', compact('settings','comm','blog2s','featur','menus','allMenus','blogs','mrpcompanynames','galleerys','notices','lists'));
    }
    public function search(Request $request)
    {
        $search = $request->get('search');
        $product = Blog::where('title','like','%'.$search.'%')->get();
       $menus = Menu::where('parent_id', '=', 0)->get();
        $allMenus = Menu::pluck('title','id')->all();
        $settings = Setting::all();
         $featur = Features::all();
         $blog2s = Link::all();
        $blogs = Blog::where('categorie', 2)->orderBy('id', 'desc')->limit(5)->get();
         $blog = Blog::all();
       $galleerys = Blog::orderBy('id', 'desc')->limit(2)->get();
        $gallerys = Blog::orderBy('id', 'desc')->paginate(21);
        return view('searchblog',['blog'=>$product], compact('settings','search','product','featur','blog2s','menus','allMenus','blogs','galleerys','gallerys','blog'));
    }
    public function post($id)
    {
        $menus = Menu::where('parent_id', '=', 0)->get();
        $allMenus = Menu::pluck('title','id')->all();
        $settings = Setting::all();
        $featur = Features::all();
        $blog2s = Link::all();
        $logs = Company_logo::all(); 
        $abroad_logos = Page_image::where('page_id', $id)->where('top_botton','Top')->orderBy('id', 'asc')->get();
        $abroad = Page_image::where('page_id', $id)->where('top_botton','Botton')->orderBy('id', 'asc')->get();
        $blogs = Abroad::all();
        $oi = Post_Categorie::find($id);
        $galleerys = Blog::orderBy('id', 'desc')->limit(2)->get();
    return view('post', compact('settings','featur','blog2s','abroad','abroad_logos','menus','logs','allMenus','blogs','galleerys','oi'));
    }
    public function study($id)
    {
        $menus = Menu::where('parent_id', '=', 0)->get();
        $allMenus = Menu::pluck('title','id')->all();
        $settings = Setting::all();
        $blogs = Abroad::all();
        $featur = Features::all();
        $blog2s = Link::all();
        $oi = Abroad::find($id);
        $abroad_logos = Abroad_logo::where('study', $id)->orderBy('id', 'desc')->get();
        $galleerys = Blog::orderBy('id', 'desc')->limit(2)->get();
    return view('study', compact('settings','featur','blog2s','menus','allMenus','blogs','galleerys','oi','abroad_logos'));
    }
    
    public function download()
    {
        $menus = Menu::where('parent_id', '=', 0)->get();
        $allMenus = Menu::pluck('title','id')->all();
        $settings = Setting::all();
        $blogs = Blog::all();
         $seos = Seo::where('id', 1)->get();
        $blog2s = Link::all();
         $featur = Features::all();
        $galleerys = Blog::orderBy('id', 'desc')->limit(2)->get();
        $download = Download::all();
    return view('download', compact('settings','blogs','seos','blog2s','featur','menus','allMenus','galleerys','download'));
    }
    public function video()
    {
        $menus = Menu::where('parent_id', '=', 0)->get();
        $allMenus = Menu::pluck('title','id')->all();
        $settings = Setting::all();
         $seos = Seo::where('id', 6)->get();
         $featur = Features::all();
         $blog2s = Link::all();
        $blogs = Blog::where('categorie', 2)->orderBy('id', 'desc')->limit(5)->get();
        $galleerys = Blog::orderBy('id', 'desc')->limit(2)->get();
        $videos = Video::all();
    return view('video', compact('settings','blogs','seos','blog2s','featur','menus','allMenus','galleerys','videos'));
    }
    public function faq()
    {
        $menus = Menu::where('parent_id', '=', 0)->get();
        $allMenus = Menu::pluck('title','id')->all();$settings = Setting::all();
        $blogs = Abroad::all();
         $seos = Seo::where('id', 5)->get();
         $featur = Features::all();
         $blog2s = Link::all();
        $galleerys = Blog::orderBy('id', 'desc')->limit(2)->get();
        $download = Faq::all();
        $download1 = Faq::orderBy('id', 'asc')->limit(1)->get();
    return view('faq', compact('settings','blogs','blog2s','seos','featur','galleerys','menus','allMenus','download','download1'));
    }
}
