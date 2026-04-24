<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserAuthController extends Controller
{
    //
    function login(Request $request){
        ///return "login function";
        return $request->all();

    }

    function signup(Request $request){
       // return "signup function";

       $input =$request->all();
       $input["password"] = bcrypt($input["password"]);
      $user= User::create($input);
      $success['token']= $user->createToken('MyApp')->plainTextToken;
      $user['name']=$user->name;
       return ['success'=>true,"result"=>$success,"msg"=>"user register success"];

    }
}
 