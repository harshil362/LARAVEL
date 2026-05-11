<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});


// Route::get('user',[UserController::class,'get']);

// Route::post('user',[UserController::class,'post']);

// Route::put('user',[UserController::class,'put']);
// Route::delete('user',[UserController::class,'delet']);


Route::get('user',[UserController::class,'any']);

Route::post('user',[UserController::class,'any']);


Route::put('user',[UserController::class,'any']);
Route::delete('user',[UserController::class,'any']);

Route::any('user',[UserController::class, 'any']);

Route::match(['post','get'],'/user',[UserController::class,'group1']);

Route::view('form','user');
