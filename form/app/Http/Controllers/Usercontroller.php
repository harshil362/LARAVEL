<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Mime\Email;

class Usercontroller extends Controller
{
    //
    function addUser(Request $request){
        // echo "user name is $request->username";
        // echo " $request->useremail";
        // echo " $request->usercity";

        $request->validate([
            'username'=> 'required | min:3 | max:15',
            'useremail'=>'required | Email',
            'usercity' => 'required| uppercase',
            'skill' => 'required'

        ],
        //custom msg
        [
            'username.required'=>'user can not empty',
            'username.min'=>'username min characters should be 3',
            'username.max'=>'username max limit is 15',
            'email.email'=>'this email not valid',
            'usercity.uppercase'=>'city should be in upper case only'
            

        ]);
        return $request;
    }
}
