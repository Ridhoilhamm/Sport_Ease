<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class FavoriteLapangan extends Component
{
    use LivewireAlert;
    public $lapangan;

    public function toggleFavorite()
{
     // Mendapatkan ID user yang sedang login
     $userId = Auth::id();  // Mengambil ID user yang sedang login

     // Jika lapangan sudah favorit, maka hapus dari favorit
     if ($this->lapangan->is_favorite) {
         $this->lapangan->is_favorite = null;  // Hapus dari favorit (set null atau false)
         $this->lapangan->id_user = null;      // Hapus ID user yang menambahkan favorit
         $message = 'Berhasil menghapus dari favorit';
     } else {
         // Jika lapangan belum favorit, maka tambahkan ke favorit
         $this->lapangan->is_favorite = true;
         $this->lapangan->id_user = $userId;  // Menyimpan ID user yang menambahkan favorit
         $message = 'Berhasil menambahkan ke favorit';
     }

     // Simpan perubahan
     $this->lapangan->save();

     // Tampilkan alert dengan pesan dinamis
     $this->alert('success', $message);
}

    
    
    public function render()
    {
        return view('livewire.favorite-lapangan');
    }
}
