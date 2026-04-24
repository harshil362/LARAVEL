<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    function adduser(Request $request){
        //return $request;
        echo $request->city;
        echo $request->gender;
        print_r($request->skill);
    }
}
