<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class student extends Controller
{
    //

    function getstudent(){

    $students= \App\Models\users::all();
        return $students;
    }
}



