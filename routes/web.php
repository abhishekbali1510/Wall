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
    return "Done";
});

Route::get('/verify',[UserController::class,'otp']);

Route::post('/checkOtp',[UserController::class,'checkOtp']);

Route::get('/create',[PostController::class,'show']);
Route::get('/createMedia',[PostController::class,'showMedia']);

Route::view('/test3','UserProfile');

route::get('/',function(){
    if(session()->get('login')=="true")
    return redirect('/home');
    else
    return view('homepage');
});

Route::view('/msg','message.index');
Route::post('/msgSend',[MessageController::class,'index']);

Route::get('/msgShow',[MessageController::class,'show']);

Route::view('/user','userProfile.userProfile');

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

Route::view('/createWall','createWall');

Route::view('/post','postpage.postpage');

Route::get('/home',[FeedController::class,'index']);

Route::post('/updatePass',[UserController::class,'update']);

Route::post('/createWall',[WallController::class,'store']);

Route::post('/create',[PostController::class,'store']);

Route::post('/createMedia',[PostController::class,'storeMedia']);

Route::view('/wall','wall');