<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;



class AuthController extends Component
{
    public $email, $password, $remember;

    protected $messages = [
        'required' => 'Harap bagian :attribute diisi.',
        'email' => 'Format email tidak valid.',
        'password.min' => 'Password minimal 8 karakter.',
    ];

    public function login()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ], $this->messages);

        $user = User::where('email', $this->email)->first();    
        if (!$user || !Hash::check($this->password, $user->password)) {
            return $this->alert('error', 'Login Gagal', [
                'text' => 'Email atau password salah!',
            ]);
        }

        // Login berhasil
        Auth::login($user, $this->remember);

        // Redirect berdasarkan role
        return $this->redirectBasedOnRole($user);
    }

    private function redirectBasedOnRole($user)
    {
        if ($user->role->value === 'admin') {
            return redirect('/admin');
        } elseif ($user->role->value === 'user') {
            return redirect()->route('/detailkategory');
        } elseif ($user->role->value === 'owner') {
            return redirect()->route('/kategory');
        }

        return redirect('/');
    }


    public function render()
    {
        return view('livewire.auth-controller')
        ->extends('user.layout')
        ->section('content');
    }
}
