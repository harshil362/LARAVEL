<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;
//for validation
use Illuminate\support\Facades\Validator;

use function Laravel\Prompts\password;

class StudentController extends Controller
{
    //
    function list()
    {
        //return"function called";
        return users::all();
    }

    function addStudent(request $request)
    {
        // return $req->input();

        //for added api database
        $users = new users();
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = $request->password;

        if ($users->save()) {
            return "user added";
        } else {
            return "opration fails";
        }
    }

    function updateStudent(Request $request)
    {

        //return "update user";
        $users = users::find($request->id);
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = $request->password;

        if ($users->save()) {
            return "user updated";
        } else {
            return "not updates ";
        }
    }

    function deletStudent($id)
    {
        //return $id;

        $users = users::destroy($id);
        if ($users) {
            return ['result' => "student record deleted"];
        } else {
            return ['result' => "student record not deleted"];
        }
    }

    function searchstudent($name)
    {
        //return $name;

        $users = users::where('name', 'like', "%$name%")->get();
        if ($users) {
            return ["result" => $users];
        } else {
            return ["result" => "no recors found"];
        }
    }


    function validate(request $request)
    {
        // return $req->input();

        //for added with validateapi database
        $rules = array(
            'name' => 'required | min:2 | max:10',
            'email'=>'email | required',
            'password' => 'min:3'
        );
        $validation = validator::make($request->all(), $rules);

        if ($validation->fails()) {
            return $validation->errors();
        } else {
            $users = new users();
            $users->name = $request->name;
            $users->email = $request->email;
            $users->password = $request->password;

            if ($users->save()) {
                return "user added";
            } else {
                return "opration fails";
            }
        }
    }
}
