<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    //
    function getuser(){
        return "harshil bhesaniya";
    }

    function aboutuser(){
        return "i am harshil bhesaniya";
    }

    function getuserName($name) {
        echo "i am " .$name;

        return view('getuser',['name'=>$name]);
    }

    //view
    function getview() {
        return view('user');
    }

    // function getuserName($name){
    //     return "user is ".$name;
        
    //     return view('getview',['name'=>$name]);
    // }

    function admin(){
        return view('admin.login');
    }

    // function userhome(){
    //     $name = "harshil";

    //     return view('home',["name"=>$name]);
    // }

    function userHome(){
        $name = "harshil";
        $user=['harshil','abc','xyz'];
        return view('home',["name"=>$name,"users"=>$user]);
    }

    function userabout() {
        return view('common.about');
    }

    

  
}
