<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;


class UserController extends Controller
{

    public function login()
    {
        return view('signIn.login');
    }

    public function check(Request $r)   // to check login credentials

    {
        //return $r->post();
        //return User::all();
        $dataId=$r->input('data');
        // $r->session()->put('abhi',$dataId);
        $dataPass=$r->input('password');
        $checkEmail = User::where('email',$dataId)->exists();
        $checkUser = User::where('userName',$dataId)->exists();
        if($checkEmail==1||$checkUser==1)
        {
            $checkPass=User::where('email',$dataId)->value('password');
            $checkPass2=User::where('userName',$dataId)->value('password'); 
            
            if($dataPass==$checkPass||$dataPass==$checkPass2)
            {
                if($checkEmail==1)
                $userSession=User::where('email',$dataId)->value('username');
                else
                $userSession=$dataId;
                $r->session()->put('login','true');
                $r->session()->put('userSession',$userSession);
                return redirect('/main');
            }
            else
            {
                $r->session()->flash('error','wrong password');
                return redirect('/');
            }
        }
        else
        {
            $r->session()->flash('error',' not registered');
            return redirect('/');
        }

    }


    public function registerCheck(Request $r)
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
            $r->session()->put('mail',$r->input('email'));
            $r->session()->put('userName',$r->input('userName'));
            $r->session()->put('password',$r->input('password'));
            $r->session()->put('register','true');
            $r->session()->put('pin',rand(1001,9999));
            $data=['pin'=>$r->session()->get('pin')];
            $users['to']=$r->session()->get('mail');
            Mail::send('signUp.mail',$data,function($messages) use ($users)
            {
                $messages->to($users['to']);
                $messages->subject('Registration code');
            });
            error_log($data['pin']);
            return redirect('/verify');
        
        }



    }

    public function otp(Request $r)
    {
        if($r->session()->has('register'))
        {   
            return view('signUp.verify');
        }
        else
        {
            return redirect('/register');
        }
    }

    public function checkOtp(Request $r)
    {
        if($r->session()->get('pin')==$r->input('otp'))
        {
            $newUser=new User;
            // $newUser->id=nextval('"users_userId_seq"'::regclass);
            $newUser->userName=$r->session()->get('userName');
            $newUser->email=$r->session()->get('mail');
            $newUser->password=$r->session()->get('password');
            $newUser->save();
            $r->session()->put('login','true');
            $r->session()->forget('register');
            $r->session()->forget('password');
            $r->session()->forget('pin');
            return redirect('/');
        }
        else
        {
            $r->session()->flash('wrongOtp','invalid otp');
            return redirect('/verify');
        }
       
    }

    public function test(Request $r)
    {
        return $r->session()->get('abhi');
    }


    
}
