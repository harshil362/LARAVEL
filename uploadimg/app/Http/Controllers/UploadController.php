<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    //

    function upload(Request $request){
        //echo "upload function";
        $path= $request->file('file')->store('public');
        $fileNameArray=explode("/",$path);
        $fileName= $fileNameArray[1];
        return view('Display',['path'=>$fileName]);
    }
}
