<?php

use App\Http\Controllers\Auth\Login_Controller;
use App\Http\Controllers\Auth\Logout_Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\Register_Controller;
use App\Http\Controllers\Dashboard_controller;
use App\Http\Controllers\PostController;
use Illuminate\Auth\Events\Login;

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

Route::get('/', function () {

    return view('home');
})->name('home');
// Route::get('/home', [Home_Controller::class,'index'])->name('home') ;
Route::get('/login', [Login_Controller::class,'index'])->name('login') ;
Route::post('/login', [Login_Controller::class,'store']) ;
Route::post('/logout', [Logout_Controller::class,'store'])->name('logout') ;
Route::get('/dashboard', [Dashboard_controller::class,'index'])->name('dashboard') ;
Route::get('/register', [Register_Controller::class,'index'])->name('register') ;
Route::post('/register', [Register_Controller::class,'store']) ;
Route::get('/posts', [PostController::class,'index'])->name('posts') ;
Route::post('/posts', [PostController::class,'store']) ;

