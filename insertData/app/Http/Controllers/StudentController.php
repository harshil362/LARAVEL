<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\student as ModelsStudent;

class StudentController extends Controller
{
    //
    function add(Request $request){
        $student= new student();
        $student->name=$request->name;
        $student->email=$request->email;
        $student->phone=$request->phone;
        //$student->save();
        $save = $student->save();

        if($save){
            return "add fucntion called";
        }
        else{
            return"opration faild";
        }
        //return $request->input();
    }

    function list(){

         $studentData= student::paginate(2);

    //  $studentData= student::all();

   return view('list-student',['students'=>$studentData]);
        //return view('list-student');
    }


    function delete($id){

    echo   $isDeleted=student::destroy($id);
    // if($isDeleted){

    // }
    }

    function edit($id){

    $student= Student::find($id);
    return view('edit',['data'=>$student]);
    }
    
    function editStudent(Request $request, $id){
        $student = Student::find($id);
        $student->name=$request->name;
        $student->email=$request->email;
        $student->phone=$request->phone;
        if($student->save()){
            return redirect('list');
        }else{
            return "update opration faild ";

        }
    }

    function search(Request $request){
    $studentData = Student::where('name','like', "%$request->search%")->get();
       return view('list-student',['students'=>$studentData,'search'=>$request->search]);

    }

    function deleteMultiplt(Request $request){

    student::destroy($request->ids);
    if($request){
        return redirect('list');
    } else{
        return"student data not deleted";
    }
        //return $request->ids;
    }


}
