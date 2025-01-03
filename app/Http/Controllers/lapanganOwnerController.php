<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class lapanganOwnerController extends Controller
{
    public function index(){
        return view('owner.lapangan');
    }
}
