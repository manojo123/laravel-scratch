<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){
		return view('welcome');
    }

    public function get_variable($variable, $variable2){
    	dd($variable, $variable2);
    }
}
