<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class riwayatController extends Controller
{
    public function show(){
        return view('user.riwayat');
    }
}
