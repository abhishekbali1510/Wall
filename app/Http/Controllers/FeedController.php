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
            if($walls)
            {
                $allWalls=Wall::all();
                $walls = "'".implode("','", $walls)."'";
                $posts=DB::select('select * from "posts" where "wallName" in ('.$walls.') order By "updated_at" DESC ');
            }
            else
                {
                    
                    $posts=null;
               }
              $walls=$userDetails->follow;
              $allWalls=Wall::all();
            return view('newsfeed.newsFeed',['posts'=>$posts,'walls'=>$walls,'allWalls'=>$allWalls]);
            //return view('newsfeed.newsFeed');
        }  
        else
        {
            return redirect('/');
        }
    }

    public function newfeed(Request $r)
    {
        if(session()->get('login')=="true")
        {
            
            $userDetails=userDetail::where('userName',$r->session()->get('user'))->first();
            $walls=$userDetails->follow;
            if($walls)
            {
                $allWalls=Wall::all();
                $walls = "'".implode("','", $walls)."'";
                $posts=DB::select('select * from "posts" order By "updated_at" DESC ');
                
            }
            else
                {
                    
                    $posts=null;
               }
              $walls=$userDetails->follow;
              $posts=DB::select('select * from "posts" order By "updated_at" DESC ');
              $allWalls=Wall::all();
            return view('newsfeed.newsFeed',['posts'=>$posts,'walls'=>$walls,'allWalls'=>$allWalls]);
            //return view('newsfeed.newsFeed');
        }  
        else
        {
            return redirect('/');
        }
    }

    public function trendfeed(Request $r)
    {
        if(session()->get('login')=="true")
        {
            
            $userDetails=userDetail::where('userName',$r->session()->get('user'))->first();
            $walls=$userDetails->follow;
            if($walls)
            {
                $allWalls=Wall::all();
                $walls = "'".implode("','", $walls)."'";
                $posts=DB::select('select * from "posts" order By "likes" DESC ');
                
            }
            else
                {
                    
                    $posts=null;
               }
              $walls=$userDetails->follow;
              $posts=DB::select('select * from "posts" order By "likes" DESC ');
              $allWalls=Wall::all();
            return view('newsfeed.newsFeed',['posts'=>$posts,'walls'=>$walls,'allWalls'=>$allWalls]);
            //return view('newsfeed.newsFeed');
        }  
        else
        {
            return redirect('/');
        }
    }
} 
