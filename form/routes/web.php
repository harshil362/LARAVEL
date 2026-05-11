<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usercontroller;

Route::get('/', function () {
    return view('welcome');
});

Route::view('user-form','user-form');

Route::post('adduser',[Usercontroller::class,'adduser']);


