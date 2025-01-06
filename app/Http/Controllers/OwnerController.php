<?php

namespace App\Http\Controllers;

use App\Models\Lapangan;
use Illuminate\Http\Request;

class OwnerController extends Controller
{
    public function index(){
        $haji= Lapangan::get();

        return view('owner.home', compact('haji'));
    }
    // return view('owner.home');
}
