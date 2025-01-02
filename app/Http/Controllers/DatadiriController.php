<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DatadiriController extends Controller
{
    public function index (){
        $user = Auth::user(); // Atau bisa pakai auth()->user()
        
        return view('user.data-diri', compact('user'));
    }
}
