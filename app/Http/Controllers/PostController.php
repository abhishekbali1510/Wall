<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Wall;
use Illuminate\Http\Request;

class PostController extends Controller
{
    
    public function show()
    {
        if(session()->get('login')=="true")
        {
            $walls=Wall::all();
            return view('create.createPost',['walls'=>$walls]);
        }
        else
        {
            return redirect('/');   
        }
        
        
    }

    public function showMedia()
    {
        if(session()->get('login')=="true")
        {
            $walls=Wall::all();
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
            'title'=>'required',
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
            'title'=>'required',
            'content'=>'max:255',
            
        ]);
        $lstId=Post::latest()->first();
        $lstId2=$lstId->postId+1;
        $title=$r->input('title');
        $wallName=$r->input('wallName');
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
}
