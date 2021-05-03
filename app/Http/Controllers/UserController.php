<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function login()
    {
        return view('login');
    }

    public function check(Request $r)   // to check login credentials

    {
        //return $r->post();
        //return User::all();
        $dataId=$r->input('data');
        $dataPass=$r->input('password');
        $checkEmail = User::where('email',$dataId)->exists();
        $checkUser = User::where('userName',$dataId)->exists();
        if($checkEmail==1||$checkUser==1)
        {
            $checkPass=User::where('email',$dataId)->value('password');
            $checkPass2=User::where('userName',$dataId)->value('password'); 
            echo $checkPass;
            if($dataPass==$checkPass||$dataPass==$checkPass2)
            {
                $r->session()->put('login','true');
                return redirect('/');
            }
            else
            {
                $r->session()->flash('error','wrong password');
                return redirect('/login');
            }
        }
        else
        {
            $r->session()->flash('error',' not registered');
            return redirect('/login');
        }

    }


    public function create(Request $r)
    {
        $r->validate([
            'userName'=>'required|min:7|max:30',
            'email'=>'required|email',
            'password'=>'required',
        ]);
    
        $dataUser=$r->input('userName');
        $dataEmail=$r->input('email');
        $checkEmail = User::where('email',$dataEmail)->exists();
        $checkUser = User::where('userName',$dataUser)->exists();
       
        if($checkUser==1)
        {
            $r->session()->flash('alreadyExist','this username already exist try a diff one');
            
        }
       
        if($checkEmail==1)
        {
            $r->session()->flash('alreadyExist','this email already registered');
            
        }

        if($checkEmail==1||$checkUser==1)
        {
            return redirect('/register');
        }
        else
        {
            $newUser=new User;
           // $newUser->id=nextval('"users_userId_seq"'::regclass);
            $newUser->userName=$r->input('userName');
            $newUser->email=$r->input('email');
            $newUser->password=$r->input('password');
            $newUser->save();
            $r->session()->put('login','true');
            return redirect('/');
        }



    }

    public function test()
    {
        return print_r(User::find(1));
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
