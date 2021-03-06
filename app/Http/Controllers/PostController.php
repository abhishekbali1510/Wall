<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Wall;
use App\Models\comment;
use App\Models\userDetail;
use Illuminate\Http\Request;


class PostController extends Controller
{
    
    public function show(Request $r)
    {
        if(session()->get('login')=="true")
        {
            $userDetails=userDetail::where('userName',$r->session()->get('user'))->first();
            $walls=$userDetails->follow;
            return view('create.createPost',['walls'=>$walls]);
        }
        else
        {
            return redirect('/');   
        }
        
        
    }

    public function showMedia(Request $r)
    {
        if(session()->get('login')=="true")
        {
            $userDetails=userDetail::where('userName',$r->session()->get('user'))->first();
            $walls=$userDetails->follow;
            return view('create.createMediaPost',['walls'=>$walls]);
        }
        else
        {
            return redirect('/');   
        }
        
    }

    public function store(Request $r)
    {
        $r->validate([
            'title'=>'required|regex:/^[a-zA-Z]+$/u',
            'wallName'=>'required',
            'content'=>'required|max:255',
        ]);
        $title=$r->input('title');
        $wallName=$r->input('wallName');
        $content=$r->input('content');


        $post= new Post;
        $post->title=$title;
        $post->wallName=$wallName;
        $post->content=$content;
        $post->createdBy=$r->session()->get('user');
        $post->save();
        return redirect('/home');
    }

    public function storeMedia(Request $r)
    {
        $r->validate([
            'title'=>'required|regex:/^[a-zA-Z]+$/u',
            'content'=>'max:255',
            'img'=>'max:2048|image|mimes:jpg,png,jpeg,gif,svg',
            
        ]);

        

        $title=$r->input('title');
        $wallName=$r->input('wallName');
        $lstId=Post::where('wallName',$wallName)->orderBy('updated_at','DESC')->first();
       
        if($lstId)
        $lstId2=($lstId->postId)+1;
        else
        $lstId2=1;
        
        $imgName=($wallName.".".$title.".".$lstId2);
        $content=$r->input('content');
        $r->file('img')->storeAs('public/images/posts',$imgName);

        $post= new Post;
        $post->title=$title;
        $post->wallName=$wallName;
        
        
        $post->content=$content;
        
        $post->imgName=$imgName;
        $post->createdBy=$r->session()->get('user');
        $post->save();
        return redirect('/home');
    }

    public function delete($id)
    {
        $post=Post::where('postId',$id)->firstorfail()->delete();
        return back();
    }

    public function showPost(request $r,$id)
    {
        if(session()->get('login')=="true")
        {
            $post=Post::where('postId',$id)->first();
            $comment=comment::where('postId',$id)->get();
            //return json_encode($comment);
            if($post->imgName)
                return view('postpage.postpage',['post'=>$post,'comments'=>$comment]);
            else
            return view('postpage.textpost',['post'=>$post,'comments'=>$comment]);
        }
    
    else
    return redirect('/');
    }
}
