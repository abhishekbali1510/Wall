<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userDetail;

class UserDetailController extends Controller
{
    public function index(Request $r)
    {
        if(session()->get('login')=="true")
     {
        $userDetails=userDetail::where('userName',$r->session()->get('user'))->first();
        return view('userProfile.userProfile',['details'=>$userDetails]);
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
}
