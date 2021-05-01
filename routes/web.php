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

route::view('/register','register');

Route::post('/verify',[UserController::class,'create']);
