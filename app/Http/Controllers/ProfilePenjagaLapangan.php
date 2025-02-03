<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ProfilePenjagaLapangan extends Controller
{
    public function index(){
       
            $user = Auth::user(); // Atau bisa pakai auth()->user()
            

        return view('owner.profile_penjaga',  compact('user'));
    }
}
