<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//DB use for (Query Builder)
use Illuminate\Support\Facades\DB;


class userController extends Controller
{
    //

    function getUsers(){
        // $result = DB::table('users')->get();
       // $result = DB::table('users')->where('password','123123')->get();

        //return $result;

        //insert data
        // $result = DB::table('users')->insert([
        //     'name'=>'tony',
        //     'email'=>'tony@test.com',
        //     'password'=>'123123',
        // ]);
        //     if($result){
        //         return"Data inserted succesfully";
        //     }else{
        //         return"data not inserted";
        //     }

            //updat data
        //   $result = DB::table('users')->where('name','tony')
        //   ->update(['password'=>'22222']);
          
        //     if($result){
        //         return"Data updated succesfully";
        //     }else{
        //         return"data not updated";
        //     }

        //delet data
          $result = DB::table('users')->where('name','ram')
        ->delete();
          
            if($result){
                return"Data deleted succesfully";
            }else{
                return"data not deleted";
            }


        return view('users',['users'=>$result]);



    }
}

