<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function adduser(Request $request){

    $request->session()->flash('message','use has ben added');
        return "added user";
    }
}
