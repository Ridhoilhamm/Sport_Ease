<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class authController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function login(Request $request) {
        $request->validate([
            'email'=>'required',
            'password'=>'required'

        ],[
            'email.required'=>'Isi Email Anda ',
            'password.required'=>'Isi Password Anda',
        ]);
        $infologin =[
            'email'=>$request->email,
            'password'=>$request->password
        ];

        if (Auth::attempt($infologin)) {
            $user = Auth::user(); // Mendapatkan data user yang login
            session()->flash('login_message', "Selamat datang, {$user->name}!");
            // Redirect berdasarkan role
            if ($user->role === 'admin') {
                return redirect('/admin');
            } elseif ($user->role === 'manager') {
                return redirect('/manager');
            } elseif ($user->role === 'user') {
                return redirect('/');
            } else {
                Auth::logout(); // Logout jika role tidak dikenal
                return redirect('/auth/login')->withErrors('Role tidak dikenali, silakan hubungi admin.');
            }
        } else {
            return redirect('/auth/login')
                ->withErrors('Username atau Password yang dimasukkan tidak sesuai')
                ->withInput();
        }
        
    }
}
