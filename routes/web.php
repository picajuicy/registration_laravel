<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\regcontroller;

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
    return view('welcome');
});

Route::group(['middleware'=>'guest'],function(){
    Route::get('login',[regcontroller::class,'index'])->name('login');
    Route::post('login',[regcontroller::class,'login'])->name('login');

    Route::get('register',[regcontroller::class,'register_view'])->name('register');
    Route::post('register',[regcontroller::class,'register'])->name('register');
});

Route::group(['middleware'=>'auth'],function(){
    Route::get('home',[regcontroller::class,'home'])->name('home');
    Route::get('logout',[regcontroller::class,'logout'])->name('logout');
});