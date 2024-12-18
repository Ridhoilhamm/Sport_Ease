<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class artikel extends Controller
{
    public function artikel(){
        return view('user.artikel');
    }
}
