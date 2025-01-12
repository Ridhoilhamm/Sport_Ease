<?php

namespace App\Livewire;

use App\Models\transaksi;
use Livewire\Component;

class TransaksiPembayaran extends Component
{

    public $user_id, $lapangan_id, $jamSewa, $tanggalSewa,$lamaSewa,$harga;
    public $lapangan;
    public $user;   

    // Validasi input
    public function simpanTransaksi()
    {
        // Pastikan akses harga dengan benar
        $lapanganNama = $this->lapangan['name'] ?? '';  // Nama lapangan
        $harga = $this->lapangan['harga'] ?? 0;  // Ambil harga lapangan jika ada, jika tidak ada maka default 0
    
        // Debugging untuk memastikan data yang diterima
        // dd($this->lapangan, $this->tanggalSewa, $this->jamSewa, $this->lamaSewa, $harga); // Pastikan $harga terisi dengan nilai yang benar
    
        // Simpan data transaksi
        Transaksi::create([
            'id_user' => auth()->id(),
            'lapangan' => $lapanganNama,  // Nama lapangan yang disewa
            'tanggal_sewa' => $this->tanggalSewa,  // Tanggal sewa
            'jam_sewa' => $this->jamSewa,  // Jam sewa
            'lama_sewa' => $this->lamaSewa,  // Lama sewa
            'harga' => $this->$harga,  // Harga lapangan
            'status' => 'pending'  // Status transaksi
        ]);
        
        // Kirim pesan sukses   
        session()->flash('message', 'Transaksi berhasil disimpan!');
        
        // Reset form setelah transaksi disimpan
        $this->reset();
    }
    
    public function render()
    {
        return view('livewire.transaksi-pembayaran');
    }
}
