<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\userDetail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;


class UserController extends Controller
{

    public function login(Request $r)
    {
        if($r->session()->get('login')=="true")
        return redirect('/home');
        else
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
            if($checkEmail==1)
            {
                $checkPass=User::where('email',$dataId)->value('password');
                $checkPass2="xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx";
            }
            else
            {
                $checkPass2=User::where('userName',$dataId)->value('password'); 
                $checkPass="xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx";
            }
            
            
            if($dataPass==$checkPass||$dataPass==$checkPass2)
            {
                if($checkEmail==1)
                $userSession=User::where('email',$dataId)->value('userName');
                else
                $userSession=$dataId;
                $r->session()->put('login','true');
                $r->session()->put('user',$userSession);//permanent
                return redirect('/home');
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

            //user details
            $newUserDetails=new userDetail;
            $newUserDetails->userName=$r->session()->get('userName');
            $newUserDetails->email=$r->session()->get('mail');
            $newUserDetails->save();
            
            // $r->session()->put('login','true');
            $r->session()->forget('register');
            $r->session()->forget('password');
            $r->session()->forget('pin');
            $r->session()->forget('mail');
            $r->session()->forget('username');
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

    public function recover(Request $rqst)
    {
        $email=$rqst->input('email');
        $rqst->session()->put('email',$email);
        $checkEmail=User::where('email',$email)->exists();
        if($checkEmail==1)
        {
            $rqst->session()->put('pin',rand(1001,9999));
            $data=array('pin'=>$rqst->session()->get('pin'),'mail'=>$email);
            $users['to']=$email;
            Mail::send('signUp.mail',$data,function($messages) use ($users)
            {
                $messages->to($users['to']);
                $messages->subject('Registration code');
            });
            $rqst->session()->put('reset','true');
            return redirect('/reset');
        }
        else
        {
            $rqst->session()->flash('error','email not registered');
            return redirect('/forgot');
        }
    }

    public function update(Request $rqst)
    {
        $otp=$rqst->input('otp');
        $newPass=$rqst->input('newPass');
        if($otp==$rqst->session()->get('pin'))
        {
            $user=User::where('email',$rqst->session()->get('email'))-> first();
            $user->password=$newPass;
            $user->save();
            $rqst->session()->forget('pin');
            $rqst->session()->forget('email');
            $rqst->session()->forget('reset');
            return redirect('/');

        }
        else
        {
            $rqst->session()->flash('error','invalid OTP');
            return redirect('/reset');
        }
    }

    public function updatePassLogin(Request $r)
    {
        if($r->session()->has('login'))
        {
            //return json_encode($checkPass);
            return view('updatePass');
        }
        else
        {
            return redirect('/');
        }
    }
    public function updatePassLoginPost(Request $r)
    {
        $oldPass=$r->input('oldPass');
        $newPass2=$r->input('newPass');
        $checkPass=User::where('userName',$r->session()->get('user'))->value('password');
        // return json_encode($oldPass);

        if($oldPass==$checkPass)
        {
        $user=User::where('userName',$r->session()->get('user'))->first();
        $user->password=$newPass2;
        $user->save();
        return redirect('/home');
        }
        else
        {
            $r->session()->flash('error','Old pawwsord not match');
            return redirect()->back();
        }
    }
    
}
