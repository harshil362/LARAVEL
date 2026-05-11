<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Whoops\Run;

class usercontroller extends Controller
{
    //
    function login(Request $request ){
        $request->session()->put('user',$request->input('user'));
        //echo session('user');
        return redirect('profile');
    }

    function logout(){
        session()->pull('user');
        return redirect('profile');
    }
}
