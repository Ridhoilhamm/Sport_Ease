<?php

namespace App\Livewire;

use App\Models\Transaksi;
use Illuminate\Support\Carbon;
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
        $transaksi = Transaksi::find($transaksiId);

        if ($transaksi) {
            $this->transaksiStatus = $transaksi->status;

            // Cek apakah sudah lebih dari 5 menit dari transaksi dibuat
            $createdAt = Carbon::parse($transaksi->created_at);
            $now = Carbon::now();

            if ($createdAt->diffInMinutes($now) > 5 && $transaksi->status === 'pending') {
                // Hapus transaksi jika lebih dari 5 menit dan statusnya pending
                $transaksi->delete();
                $this->alert('error', 'Transaksi telah dihapus karena melebihi batas waktu!');
                return redirect()->route('user.user'); // Redirect ke halaman lain
            }

            // Simpan URL bukti pembayaran jika transaksi masih valid
            $this->buktiUrl = $transaksi->bukti_pembayaran;
        }
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
