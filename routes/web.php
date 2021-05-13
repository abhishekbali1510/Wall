<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

Route::get('/', function (Request $r) {
    if($r->session()->has('login'))
    return view('welcome');
    else
    return "access denied";
});

route::get('/login',[UserController::class,'login']);

route::post('/loginCheck',[UserController::class,'check']);

route::view('/register','signUp.register');

Route::post('/registerCheck',[UserController::class,'registerCheck']);

Route::get('/test',[UserController::class,'test']);

Route::get('/verify',[UserController::class,'otp']);

Route::post('/checkOtp',[UserController::class,'checkOtp']);

Route::view('/test2','createPost');


Route::view('/test3','UserProfile');