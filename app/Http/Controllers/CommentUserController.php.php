<?php
   
namespace App\Http\Controllers;
   
use Illuminate\Http\Request;
use App\Models\Comment;
   
class CommentUserController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = CommentUser::orderBy('id', 'desc')
        ->get();
        return view('admin.commentusers.index', compact('comments'));
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
            'blog_id' => 'required', 
            'name' => 'required',
            'message' => 'required', 
            'email' => 'required', 
        ]);

        $comment = new Comment([
             'blog_id' => $request->get('blog_id'), 
            'name' => $request->get('name'),
            'message' => $request->get('message'),
            'email' => $request->get('email'),
        ]);
        $comment->save();
        return back();
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $comments = Comment::find($id);
        return view('admin.comments.edit', compact('comments'));

    }
}