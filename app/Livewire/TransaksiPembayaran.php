<?php

namespace App\Livewire;

use App\Models\transaksi;
use Livewire\Component;

class TransaksiPembayaran extends Component
{

    public $user_id, $lapangan_id, $jamSewa, $tanggalSewa,$lamaSewa,$total_pembayaran;
    public $lapangan;
    public $user;   

    // Validasi input
    public function simpanTransaksi()
    {
        $lapanganNama = $this->lapangan->name ?? '';  // Nama lapangan
        $total_pembayaran = $this->lapangan->harga * $this->lamaSewa ?? 0;  // Perhitungan total pembayaran berdasarkan harga lapangan dan lama sewa

        // Debugging untuk memastikan data yang diterima
        // dd($this->lapangan, $this->tanggalSewa, $this->jamSewa, $this->lamaSewa, $total_pembayaran); // Pastikan $total_pembayaran terisi dengan nilai yang benar
        
        // Simpan data transaksi
        Transaksi::create([
            'id_user' => auth()->id(),
            'lapangan' => $lapanganNama, 
            'id_lapangan' => $this->lapangan->id, 
            'tanggal_sewa' => $this->tanggalSewa,
            // Tanggal sewa
            'jam_sewa' => $this->jamSewa,  // Jam sewa
            'lama_sewa' => $this->lamaSewa,  // Lama sewa
            'total_pembayaran' => $total_pembayaran,  // Total pembayaran (harga lapangan * lama sewa)
            'status' => 'pending'  // Status transaksi
        ]);

        // Kirim pesan sukses   
        return redirect()->route('user.user')->with('message', 'Transaksi berhasil disimpan!');
    }
    
    public function render()
    {
        return view('livewire.transaksi-pembayaran');
    }
}
