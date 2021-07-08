<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserDetailController;
use App\Http\Controllers\WallController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\FeedController;
use App\Http\Controllers\CommentController;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web Routes for your application. These
| Routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/login',[UserController::class,'login']);

Route::post('/loginCheck',[UserController::class,'check']);

Route::get('/register',function(){
    if(session()->get('login')=="true")
    return redirect('/home');
    else
    return view('signUp/register');
});

Route::post('/registerCheck',[UserController::class,'registerCheck']);

Route::get('/logout',function(){
    session()->forget('login');
    session()->forget('user');
    return redirect('../');
});

Route::get('/verify',[UserController::class,'otp']);

Route::post('/checkOtp',[UserController::class,'checkOtp']);

Route::view('/test3','UserProfile');

Route::get('/',function(){
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

Route::get('/post/{id}',[PostController::class,'showPost']);

Route::get('/create',[PostController::class,'show']);

Route::get('/createMedia',[PostController::class,'showMedia']);

Route::post('/create',[PostController::class,'store']);

Route::post('/createMedia',[PostController::class,'storeMedia']);

Route::get('/user/{userName}',[UserDetailController::class,'index']);

route::get('/user',function(Request $r){
return redirect("/user/{$r->session()->get('user')}");
});

Route::post('/msgSend',[MessageController::class,'index']);

Route::get('/msgShow',[MessageController::class,'show']);

Route::get('/message/{receiver?}',[MessageController::class,'newindex']);

Route::get('/testing',[messageController::class,'test']);//use for session data

Route::get('/updatePassLogin',[UserController::class,'updatePassLogin']);

Route::post('/updatePassLogin',[UserController::class,'updatePassLoginPost']);

Route::post('/bioChange',[UserDetailController::class,'bio']);

Route::post('/fullName',[UserDetailController::class,'fullName']);

Route::post('/social',[UserDetailController::class,'social']);
//session done
Route::post('/deletePost/{id}',[PostController::class,'delete']);

Route::post('/deleteWall/{id}',[WallController::class,'delete']);//incomplete

Route::get('/followWall/{wallName}',[WallController::class,'follow']);

Route::get('/unfollowWall/{wallName}',[WallController::class,'unfollow']);

Route::get('/addFriend/{userName}',[UserDetailController::class,'addFriend']);

Route::get('/removeFriend/{userName}',[UserDetailController::class,'removeFriend']);

Route::post('/postComment/{id}',[CommentController::class,'store']);

