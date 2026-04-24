<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use Symfony\Component\HttpKernel\HttpCache\Store;

class ImageController extends Controller
{
    //

      // Show form (GET)
    public function index()
    {
        return view('upload'); // upload.blade.php
    }

    function upload(Request $request){
        $path= $request->file('file')->Store('public');
        $pathArray= explode("/",$path);
        $imgPath=$pathArray[1];
        $img= new Image();                                                              
        $img->path=$imgPath;
       if($img->save())
        {
            return redirect('list');
        }else
        {
            return "error ! try again";
        }
    }

    function list(){
        $images= Image::all();
        return view('display',['imgData'=>$images]);
    }
}
