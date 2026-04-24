<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\student;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users',[student::class,'getstudent']);
