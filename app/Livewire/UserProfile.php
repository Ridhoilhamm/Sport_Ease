<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class UserProfile extends Component
{
    use WithFileUploads;

    public $name;
    public $email;
    public $avatar;
    public $user;

    public function mount()
    {
        $this->user = Auth::user();
        $this->name = $this->user->name;
        $this->email = $this->user->email;
    }

    public function updateProfile()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($this->avatar) {
            $avatarPath = $this->avatar->store('avatars', 'public');
            $this->user->update(['avatar' => $avatarPath]);
        }

        $this->user->update([
            'name' => $this->name,
            'email' => $this->email,
        ]);

        session()->flash('success', 'Profil berhasil diperbarui!');
    }

    public function render()
    {
        return view('user.data-diri');
    }
}

