<?php

namespace app\http\Controllers;

use Illuminate\Http\Request;

class taskControl extends Controller
{
    public function getMain (){

    	return view('main');
    }
}