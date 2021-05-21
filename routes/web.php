<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MessageController;
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

route::view('/register','signUp.register');

Route::post('/registerCheck',[UserController::class,'registerCheck']);

// Route::get('/test',[UserController::class,'test']);

Route::get('/verify',[UserController::class,'otp']);

Route::post('/checkOtp',[UserController::class,'checkOtp']);

Route::view('/create','create.createPost');
Route::view('/createMedia','create.createMediaPost');

Route::view('/test3','UserProfile');
route::view('/','homepage');

Route::view('/msg','message.index');
Route::post('/msgSend',[MessageController::class,'index']);

Route::get('/msgShow',[MessageController::class,'show']);

Route::view('/test5','userProfile.userProfile');
Route::view('/forgot','forgotPass');
Route::view('/reset','resetPass');
Route::view('/createWall','createWall');
Route::view('/testu','userprofile.userprofile');
