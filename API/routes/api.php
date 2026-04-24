<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

 
Route::get("/test",function(){
    return ["name"=>"harshil bhesaniya",'channel'=>"coding laravel"];
});

Route::get('students',[StudentController::class,'list']);

Route::post('addStudent',[StudentController::class,'addstudent']);

Route::put('update-student',[StudentController::class,'updateStudent']);

Route::delete('delet-student/{id}',[StudentController::class,'deletStudent']);

Route::get('searchstudent/{name}',[StudentController::class,'searchstudent']);

Route::post('validateadd',[StudentController::class,'validate']);



