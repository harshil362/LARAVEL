<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    //
    function getuser(){
        $response= Http::get('https://jsonplaceholder.typicode.com/posts');
         return $response;
        return $response->body();
        return $response->status();
    }
}
