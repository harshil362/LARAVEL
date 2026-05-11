<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AgeCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //echo " echo form age chack";

        //age print

        //proper formatted structure
        //echo "<pre>";
        //print_r($request->age);

        //age check or wc
        if($request->age<18){
            die('you can not visit this site');
        }
        return $next($request);
    }
}
