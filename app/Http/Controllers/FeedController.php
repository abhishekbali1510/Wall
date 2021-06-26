<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Wall;
use DB;
use App\Models\userDetail;

class FeedController extends Controller
{
    public function index(Request $r)
    {
        if(session()->get('login')=="true")
        {
            
            $userDetails=userDetail::where('userName',$r->session()->get('user'))->first();
            $walls=$userDetails->follow;
            $posts=DB::select('select * from "posts" where "wallName" = ARRAY[$walls]');
            return view('newsfeed.newsFeed',['posts'=>$posts,'walls'=>$walls]);
            //return view('newsfeed.newsFeed');
        }  
        else
        {
            return redirect('/');
        }
    }
} 
