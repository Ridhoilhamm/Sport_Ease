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
        $userId = Auth::id();

        if (!$userId) {
            $this->alert('warning', 'Silakan login terlebih dahulu untuk menambahkan ke favorit.');
            return;
        }

        // Jika lapangan sudah difavoritkan oleh user yang sama
        if ($this->lapangan->is_favorite && $this->lapangan->id_user === $userId) {
            $this->lapangan->is_favorite = false; // ubah jadi false, jangan null
            // $this->lapangan->id_user = null; ❌ jangan pakai ini kalau tidak nullable
            $this->lapangan->save();

            $this->alert('success', 'Berhasil menghapus dari favorit');
        }
        // Jika belum difavoritkan
        elseif (!$this->lapangan->is_favorite) {
            $this->lapangan->is_favorite = true;
            $this->lapangan->id_user = $userId;
            $this->lapangan->save();

            $this->alert('success', 'Berhasil menambahkan ke favorit');
        }
        // Kalau sudah difavoritkan oleh user lain
        else {
            $this->alert('warning', 'Lapangan sudah ditambahkan ke favorit oleh pengguna lain.');
        }
    }


    public function render()
    {
        return view('livewire.favorite-lapangan');
    }
}
