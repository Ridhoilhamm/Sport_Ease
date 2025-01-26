<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class DataProfileUpload extends Component
{

    use LivewireAlert;

    public $phone;   // Nomor telepon pengguna
    public $address; // Alamat pengguna

    public function mount()
    {
        // Ambil informasi pengguna yang sudah ada
        $user = Auth::user();
        $this->phone = $user->phone;  // Ambil nomor telepon saat ini
        $this->address = $user->address;  // Ambil alamat saat ini
    }

    public function save()
    {
       
        // Validasi input
        $this->validate([
            'phone' => 'nullable|string|max:15',   // Validasi nomor telepon
            'address' => 'nullable|string|max:255', // Validasi alamat
        ]);

        // Simpan informasi pengguna
        Auth::user()->update([
            'phone' => $this->phone,  // Update nomor telepon
            'address' => $this->address,  // Update alamat
        ]);
        
        $this->alert('success', 'Informasi pengguna berhasil diperbarui');
        return redirect('/data-diri');// Arahkan kembali ke halaman profil
    }

    
    public function render()
    {
        return view('livewire.data-profile-upload');
    }
}
