<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Lapangan extends Controller
{
    public function index (){
        return view('lapangan');
    }
}
