<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MiddlewareController extends Controller
{
    //
    public function __construct()
    {
    	$this->middleware('auth');
    }

    public function iya ()
    {
    $a= "Selvi";
    return "Nama Saya :".$a;
	}

}
