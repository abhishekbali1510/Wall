<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use App\Models\userDetail;

class UserDetailController extends Controller
{
    public function index(Request $r,$userName)
    {
        if(session()->get('login')=="true")
     {
        $userDetails=userDetail::where('userName',$userName)->first();
        if($userName==$r->session()->get('user'))
        $user=1;
        else
        $user=0;
        return view('userProfile.userProfile',['details'=>$userDetails,'user'=>$user]);
     }
     else
     {
         return redirect('/');   
     }
    }

    public function bio(Request $r)
    {
        $r->validate([
            'bio'=>'required|max:250',
        ]);
        $userDetails=userDetail::where('userName',$r->session()->get('user'))->first();
        $userDetails->bio=$r->input('bio');
        $userDetails->save();   
        return back();
    }

    public function fullName(Request $r)
    {
        $r->validate([
            'fname'=>'required|max:250',
            'lname'=>'required|max:250',
           
        ]); 
        $fname=$r->input('fname');
        $lname=$r->input('lname');
        $fullName=$fname.' '.$lname;
        $userDetails=userDetail::where('userName',$r->session()->get('user'))->first();
        $userDetails->fullName=$fullName;
        $userDetails->save();   
        return back();
    }

    public function social(Request $r)
    {
        $r->validate([
            'git'=>'max:250',
            'instagram'=>'max:250',
            'twitter'=>'max:250',
            'facebook'=>'max:250',
        ]);    
        $userDetails=userDetail::where('userName',$r->session()->get('user'))->first();
        $userDetails->insta=$r->input('instagram');
        $userDetails->facebook=$r->input('facebook');
        $userDetails->github=$r->input('git');
        $userDetails->twitter=$r->input('twitter');
        $userDetails->save();   
        return back();
    }

    public function follow(Request $r)
    {
        $userDetails=userDetail::where('userName',$r->session()->get('user'))->first();
       
       $new=$userDetails->follow;
       //$new=["rohan"=>"rohan"];
        //$new=Arr::collapse([$new,['abhishek'=>"abhishek"]]);
        $new=Arr::except($new, ['rohan']);
        $userDetails->follow=$new;
        $userDetails->save();
       
         //$contains = Arr::get($new,"rohan1");
         return dd($userDetails->follow);
    }
}
