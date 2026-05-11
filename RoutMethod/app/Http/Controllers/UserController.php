<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function get(){
        return "Get Route Method";
    }

    function post(){
        return "post route method";
    }

    
    function put(){
        return "put route method";
    }

    function delet(){
        return "delet route method";
    }

    function any(){
        return "this is any method";
    }

    function group1(){
        return "this is group 1";
    }
}
