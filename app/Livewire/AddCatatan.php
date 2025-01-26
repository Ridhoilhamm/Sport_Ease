<?php

namespace App\Livewire;

use App\Models\transaksi;
use Illuminate\Support\Facades\Auth;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class AddCatatan extends Component
{
    use LivewireAlert;
    public $transaksiId; // ID transaksi
    public $catatan;     // Catatan transaksi

    public function mount()
{
    $transaksi = Auth::user()->transaksi()->latest()->first();

    // Jika transaksi belum ada, buat transaksi baru
    if (!$transaksi) {
        $transaksi = new transaksi();
        $transaksi->user_id = Auth::id();  // Pastikan ID pengguna yang sedang login
        $transaksi->tanggal_sewa = now();  // Set tanggal sewa atau data lain yang diperlukan
        $transaksi->status = 'menunggu';  // Set status transaksi (misalnya)
        $transaksi->save();  // Simpan transaksi baru
    }

    // Setelah transaksi ada, set data transaksiId dan catatan
    $this->transaksiId = $transaksi->id;
    $this->catatan = $transaksi->catatan;

}
    public function save()
    {
     // Validasi input catatan
     $this->validate([
        'catatan' => 'nullable|string|max:500',
    ]);

    // Temukan transaksi berdasarkan ID yang telah ditentukan
    $transaksi = transaksi::findOrFail($this->transaksiId);

    // Update catatan transaksi
    $transaksi->catatan = $this->catatan;
    $transaksi->save();  // Simpan perubahan

    // Kirim notifikasi ke pengguna
    $this->alert('success', 'Catatan berhasil diperbarui.');
    }
    
    public function render()
    {
        return view('livewire.add-catatan');
    }
}
