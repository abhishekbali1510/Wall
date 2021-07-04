<?php

namespace App\Http\Controllers;

use App\Models\Wall;
use App\Models\Post;
use DB;
use Illuminate\Support\Arr;
use App\Models\userDetail;
use Illuminate\Http\Request;

class WallController extends Controller
{
    public function store(Request $r)
    {
        $r->validate([
            'wallName'=>'required|max:50',
            'img'=>'required',
            'bio'=>'required|max:250',
        ]);
        $name=$r->input('wallName');
        $imgName=$r->file('img')->getClientOriginalName();
        $bio=$r->input('bio');

        $checkName=Wall::where('name',$name)->exists();
        if($checkName!=1)
        {
            $r->file('img')->storeAs('public/images/wall',$name);
                       

            $wall=new Wall;
            $wall->name=$name;
            $wall->imgName=$name;
            $wall->bio=$bio;
            $wall->createdBy=$r->session()->get('user');
            $wall->save();
            $userDetails=userDetail::where('userName',$r->session()->get('user'))->first();
            $follow=$userDetails->follow;
            $follow=Arr::collapse([$follow,[$name=>$name]]);
            $userDetails->follow=$follow;
            $userDetails->save();
            return redirect('/home');
        }
        else
        {
            $r->session()->flash('error','try a different wall name');
            return redirect('/createWall');
        }
    }
    public function show(Request $r,$wallName)
    {
        if(session()->get('login')=="true")
        {
            if(wall::where('name',$wallName)->exists())
            {
                $wall=Wall::where('name',$wallName)->first();
                
                $posts=DB::select('select * from "posts" where "wallName" = ?',[$wallName]);
                //return json_encode($posts);
                $userDetails=userDetail::where('userName',$r->session()->get('user'))->first();
                $follow=$userDetails->follow;
                $contains = Arr::has($follow,$wallName);
                if($contains)
                {
                    $show=1;
                }
                else
                {
                    $show=0;
                    
                }
                 return view('showWall',['wall'=>$wall,'posts'=>$posts,'show'=>$show]);
            }
            else
            {
                return view('errors.404');
            }
        }
        else
        {
            return redirect('/');
    
        }
    }

    public function delete($id)
    {
        $wallName=Post::where('postId',$id)->value('wallName');
        $wallName=Wall::where('name',$wallName)->firstorfail();
        $wallName->delete();
        
        return "deleted"."$id";///incomplete: delete a wall and delete all its post
    }

    public function follow(Request $r,$wallName)
    {
        $userDetails=userDetail::where('userName',$r->session()->get('user'))->first();
        $follow=$userDetails->follow;
        $follow=Arr::collapse([$follow,[$wallName=>$wallName]]);
        $userDetails->follow=$follow;
        $userDetails->save();
        return back();
    }

    public function unfollow(Request $r,$wallName)
    {
        $userDetails=userDetail::where('userName',$r->session()->get('user'))->first();
        $follow=$userDetails->follow;
        $follow=Arr::except($follow, [$wallName]);
        $userDetails->follow=$follow;
        $userDetails->save();
        return back();
    }
 
}
