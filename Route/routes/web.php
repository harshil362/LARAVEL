<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});


//Route::view('home/profile/user','home')->name('hm');

//Route::get('show',[HomeController::class,'show']);

//route group

// Route::prefix('student')->group(function(){
// Route::view('/home','home');
// Route::get('/show',[HomeController::class,'show']);
// Route::get('/add',[HomeController::class,'add']);

// });


// Route::prefix('student/india')->group(function(){
// Route::view('/home','home');
// Route::get('/show',[HomeController::class,'show']);
// Route::get('/add',[HomeController::class,'add']);

// });

//========================================================================

//route group with controller

// Route::get('show',[StudentController::class,'show']);
// Route::get('add',[StudentController::class,'add']);
// Route::get('delet',[StudentController::class,'delet']);
//Route::get('about/{name}',[StudentController::class,'about']);

Route::controller(StudentController::class)->group(function(){

    Route::get('show','show');
    Route::get('add','add');
    Route::get('delet','delet');
    Route::get('about/{name}','about');

});

