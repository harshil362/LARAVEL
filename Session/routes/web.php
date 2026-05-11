<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usercontroller;

Route::get('/', function () {
    return view('welcome');
});


Route::view('login','login');
Route::view('profile','profile');


Route::post('login',[usercontroller::class, 'login']);
Route::get('logout',[usercontroller::class,'logout']);