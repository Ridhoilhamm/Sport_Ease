<?php

namespace App\Livewire;

use App\Models\Transaksi;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;

class BuktiPembayaran extends Component
{
    use LivewireAlert;
    use WithFileUploads;

    public $buktiPembayaran;
    public $transaksiId;
    public $transaksiStatus; // Status transaksi
    public $buktiUrl; // URL bukti pembayaran

    public function mount($transaksiId)
    {
        $this->transaksiId = $transaksiId;

        // Cari transaksi, dapatkan status dan URL bukti pembayarannya
        $transaksi = Transaksi::find($transaksiId);
        $this->transaksiStatus = $transaksi ? $transaksi->status : null;
        $this->buktiUrl = $transaksi ? $transaksi->bukti_pembayaran : null;
    }

    public function uploadBuktiPembayaran()
    {
        // Validasi file yang di-upload
        $this->validate([
            'buktiPembayaran' => 'required|file|mimes:jpg,png,pdf|max:2048',
        ]);

        $filePath = $this->buktiPembayaran->store('lapangans', 'public');
        $transaksi = Transaksi::find($this->transaksiId);

        if ($transaksi) {
            $transaksi->bukti_pembayaran = $filePath;
            $transaksi->status = 'menunggu hari';
            $transaksi->save();

            // Perbarui URL bukti pembayaran
            $this->buktiUrl = $filePath;

            $this->alert('success', 'Bukti pembayaran berhasil diunggah dan status telah diperbarui!');
        } else {
            $this->alert('error', 'Transaksi tidak ditemukan!');
        }
    }

    public function render()
    {
        return view('livewire.bukti-pembayaran', [
            'transaksiStatus' => $this->transaksiStatus, // Kirim status ke view
            'buktiUrl' => $this->buktiUrl, // Kirim URL bukti pembayaran ke view
        ]);
    }
}
