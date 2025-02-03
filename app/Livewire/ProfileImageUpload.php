<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use PhpParser\Node\Stmt\TryCatch;

class ProfileImageUpload extends Component
{
    use LivewireAlert;
    use WithFileUploads;

    public $success = false;
    public $profile_image; // File gambar sementara
    public $current_image; // Gambar profil saat ini

    public function mount()
    {
        // Ambil gambar profil dari user yang login
        $this->current_image = Auth::user()->profile_image;
    }

    public function updatedProfileImage()
    {
        $this->validate([
            'profile_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    }

    public function save()
    {
        try {
            $this->validate([
                'profile_image' => 'required|image|max:2048', // contoh validasi
            ]);
            $path = $this->profile_image->store('profile_images', 'public');
    
            // Simpan ke database atau logika tambahan
            Auth::user()->update(['profile_image' => $path]);
        
            $this->success = true; // Tandai sukses
            $this->alert('success', 'Gambar Profil berhasil diganti');
        } catch (\Illuminate\Validation\ValidationException $e) {
            
            $this->alert('error', $e->validator->errors()->first('profile_image'));
            return redirect('/data-diri');
        }
        // Validasi dan proses penyimpanan gambar
       
      
    
        // Logika penyimpanan gambar
       
    }

    public function render()
    {
        return view('livewire.profile-image-upload');
    }
}
