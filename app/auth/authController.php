<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class authController extends Controller
{

    public function tampilRegistrasi()
    {
        return view('registrasi');
    }

    public function submitRegistrasi(Request $request) {
        $user = new User();
        $user->name = $request->name;
        $user->email =$request->email;
        $user->password =bcrypt($request->password);
        $user->save();
        return redirect()->route('login');
        

    }

    public function login(){
        return view('login');
    }

    public function loginsubmit(Request $request){
        $data = $request->only('email','password');

        if (Auth::attempt(credentials: $data)) {
            $request->session()->regenerate();
            return redirect()->route('employee');
        } else {
             return redirect()->back()->with('gagal','email and password wrong!');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
