<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\comment;
use App\Models\Post;

class CommentController extends Controller
{
    public function store(Request $r,$id)
    {
        $comment=new comment;
        $comment->postId=$id;
        $comment->content=$r->input('content');
        $comment->commentedBy=$r->session()->get('user');
        $comment->save();
        $post=Post::where('postId',$id)->first();
        $like=$post->likes;
        if($like==null)
        $like=0;
        $post->likes=$like+1;
        $post->save();
        //return "done";
        return back();
    }
}
