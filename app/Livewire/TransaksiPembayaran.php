<?php

namespace App\Livewire;

use App\Models\transaksi;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class TransaksiPembayaran extends Component
{
    use LivewireAlert;
    public $user_id, $lapangan_id, $jamSewa, $tanggalSewa,$lamaSewa,$total_pembayaran;
    public $lapangan;
    public $user;   

    // Validasi input
    public function simpanTransaksi()
    {
        $lapanganNama = $this->lapangan->name ?? '';  // Nama lapangan
        $total_pembayaran = $this->lapangan->harga * $this->lamaSewa ?? 0;  // Perhitungan total pembayaran berdasarkan harga lapangan dan lama sewa
    
        // Cek apakah ada transaksi yang sudah ada dengan tanggal dan jam yang sama
        $existingTransaction = Transaksi::where('tanggal_sewa', $this->tanggalSewa)
                                        ->where('jam_sewa', $this->jamSewa)
                                        ->where('id_lapangan', $this->lapangan->id)
                                        ->first();
    
        // Jika transaksi sudah ada, kembalikan pesan error
        if ($existingTransaction) {
            $this->alert('error', 'Transaksi di Tgl & Jam ini sudah ada');

            
            return redirect("/pembayaran");
        }
    
        // Simpan data transaksi jika tidak ada transaksi yang sama
        Transaksi::create([
            'id_user' => auth()->id(),
            'lapangan' => $lapanganNama, 
            'id_lapangan' => $this->lapangan->id, 
            'tanggal_sewa' => $this->tanggalSewa,
            'jam_sewa' => $this->jamSewa,  // Jam sewa
            'lama_sewa' => $this->lamaSewa,  // Lama sewa
            'total_pembayaran' => $total_pembayaran,  // Total pembayaran (harga lapangan * lama sewa)
            'status' => 'pending'  // Status transaksi
        ]);
    
        // Kirim pesan sukses
         $this->alert('success', 'Transaksi berhasil disimpan');
         return redirect("/user");
    }
    public $rekening = '122333444';

    public function copyRekening()
    {
        // Emit event ke frontend untuk memicu alert
        $this->emit('rekeningDisalin');
    }

    public function render()
    {
        return view('livewire.transaksi-pembayaran');
    }
}
