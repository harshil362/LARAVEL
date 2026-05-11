<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usercontroller;

// Route::get('/', function () {
//     return view('home');
// });

// Route ::view('/about','home');

// Route::get('/about/{name}', function ($name) {
//     return view('about',['name'=>$name]); 
// });

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/home', function () {
//     return view('home');
// });

// Route::get('/about', function () {
//     return view('about');
// });

Route::get('/', function (){
    return view('welcome');
});

Route::get('/home', function() {
    return view('home');
});

Route::get('/about', function(){
    return view('about');
});

//controller
Route::get('user',[UserController::class,'getuser']);
Route::get('about',[Usercontroller::class,'aboutuser']);
Route::get('userName/{name}',[Usercontroller::class,'getuserName']);

Route::get('user',[UserController::class,'getview']);
Route::get('user',[Usercontroller::class,'getview']);
Route::get('admin',[Usercontroller::class,'admin']);

Route::get('user-home',[Usercontroller::class,'UserHome']);
Route::get('user-about',[Usercontroller::class,'Userabout']);

