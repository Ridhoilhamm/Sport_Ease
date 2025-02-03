<?php

namespace App\Livewire\Auth;

use App\Models\User;
use GrahamCampbell\ResultType\Success;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Registrasi extends Component
{
    use LivewireAlert;
    public $name, $email, $password, $password_confirmation;

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:6|confirmed',
    ];
  
    public function registrasi()
    {
        $this->validate();

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        Auth::login($user);
        $this->alert('success', 'Akun berhasil dibuat');
        return redirect('/login');
        dd('hallo');
    }

    
    public function render()
    {
        return view('livewire.auth.registrasi');
    }
}
