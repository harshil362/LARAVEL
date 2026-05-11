<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // //
    // function show(){
    //    // return view('home');
    //   // return redirect()->to('home/profile/user');
    //   return to_route('hm');
    // }

    function show(){
        return "student list";
    }

    
    function add(){
        return "add new student list";
    }
}
