<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\comment;

class CommentController extends Controller
{
    public function store(Request $r,$id)
    {
        $comment=new comment;
        $comment->postId=$id;
        $comment->content=$r->input('content');
        $comment->commentedBy=$r->session()->get('user');
        $comment->save();
        //return "done";
        return back();
    }
}
