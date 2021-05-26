<?php

namespace App\Http\Controllers;

use App\Models\Wall;
use Illuminate\Http\Request;

class WallController extends Controller
{
    public function store(Request $r)
    {
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
            $wall->save();
            return redirect('/home');
        }
        else
        {
            $r->session()->flash('error','try a different wall name');
            return redirect('/createWall');
        }
    }
}
