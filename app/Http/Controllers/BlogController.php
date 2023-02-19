<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Blog_Categorie;
use App\Notifications\BlogNotification;
use Illuminate\Support\Facades\Notification;
use App\Models\Newsletter;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::orderBy('id', 'desc')
        ->get();
        return view('admin.blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $blog_cat = Blog_Categorie::all();
        return view('admin.blogs.create', compact('blog_cat'));
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
            'image_blgs' =>  'required',
            'show_desction' => 'required',
             'categorie' => 'required',
        ]);
        
       
        $blog = new blog([
            'title' => $request->get('title'), 
            'image_blgs' => $request->get('image_blgs'),
            'desction' => $request->get('desction'),
            'show_desction' => $request->get('show_desction'),
            'categorie' => $request->get('categorie'), 
        ]);
        
        $blog->save();
        
        $user = Newsletter::all();
        $details=[
            'title'=>$blog->title,
            'actionURL'=>url('/blog_details/'.$blog->id),
            
        ];
        
        Notification::send($user,new BlogNotification($details));
        
        
        return redirect('/admin/blogs')
        ->with('success',' Blogs successfully.');
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
        
        $blog_cat = Blog_Categorie::all();
        $blog = Blog::find($id);
         return view('admin.blogs.edit',compact('blog', 'blog_cat'));
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
            'show_desction' => 'required',
            'categorie' => 'required',
        ]);
         
        $blog = Blog::find($id);
        $blog->title = $request->get('title');
        $blog->image_blgs = $request->get('image_blgs');
        $blog->desction = $request->get('desction');
        $blog->show_desction = $request->get('show_desction');
        $blog->categorie = $request->get('categorie');
        $blog->save();
  
        return redirect('/admin/blogs')
        ->with('success','Blog Categories updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::find($id);
        $blog->delete();
  
         return redirect('/admin/blogs')
         ->with('success','Blog deleted successfully');
    }
}
