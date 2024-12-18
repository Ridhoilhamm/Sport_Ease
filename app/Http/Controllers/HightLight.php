<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HightLight extends Controller
{
    public function data (){
        return view('user.hightlight');
    }
}
