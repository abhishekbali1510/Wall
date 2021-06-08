<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WallController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\FeedController;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



route::get('/login',[UserController::class,'login']);

route::post('/loginCheck',[UserController::class,'check']);

route::get('/register',function(){
    if(session()->get('login')=="true")
    return redirect('/home');
    else
    return view('signUp/register');
});

Route::post('/registerCheck',[UserController::class,'registerCheck']);

Route::get('/logout',function(){
    session()->forget('login');
    session()->forget('user');
    return "Done";
});

Route::get('/verify',[UserController::class,'otp']);

Route::post('/checkOtp',[UserController::class,'checkOtp']);

Route::view('/test3','UserProfile');

route::get('/',function(){
    if(session()->get('login')=="true")
    return redirect('/home');
    else
    return view('homepage');
});


Route::get('/forgot',function(){
    if(session()->get('login')=="true")
    return redirect('/home');
    else
    return view('forgotPass');
});

Route::post('/recoverPass',[UserController::class,'recover']);

Route::get('/reset',function(){
    if(session()->get('login')=="true")
    return redirect('/home');
    else if(session()->get('reset')=="true")
    return view('resetPass'); 
    else
    return redirect('/');
});

Route::post('/updatePass',[UserController::class,'update']);

Route::get('/createWall',function(){
    if(session()->get('login')=="true")
    return view('createWall');
    else
    return redirect('/');
});

Route::post('/createWall',[WallController::class,'store']);

Route::get('/wall/{wallName}',[WallController::class,'show']);

Route::get('/home',[FeedController::class,'index']);

Route::get('/post',function()
{
    if(session()->get('login')=="true")
    return view('postpage.postpage');
    else
    return redirect('/');
});

Route::get('/create',[PostController::class,'show']);

Route::get('/createMedia',[PostController::class,'showMedia']);

Route::post('/create',[PostController::class,'store']);

Route::post('/createMedia',[PostController::class,'storeMedia']);

Route::get('/user',function()
{
    // if(session()->get('login')=="true")
    // {
        return view('userProfile.userProfile');
    // }
    // else
    // {
    //     return redirect('/');   
    // }
    
});

//above routes session done 
Route::view('/msg','message.index');

Route::post('/msgSend',[MessageController::class,'index']);

Route::get('/msgSend2',[MessageController::class,'index2']);

Route::get('/msgShow',[MessageController::class,'show']);

Route::view('/message','message.index2');

