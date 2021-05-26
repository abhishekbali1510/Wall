<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Wall;

class FeedController extends Controller
{
    public function index()
    {
    //     $posts=Post::all();
    //     return view('newsfeed.newsFeed',['posts'=>$posts]);
            return view('newsfeed.newsFeed');
    }
}
