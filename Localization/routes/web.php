<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Session\Session;


Route::middleware('SetLang')->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });
});

Route::get('/{lang}',function($lang){
    App::setLocale($lang);
    return view('welcome');
});


Route::get('setlang/{lang}',function($lang){
    //Session::put('lang',$lang);
    return redirect('/');
    //return $lang;
});
// Route::view('about','about');