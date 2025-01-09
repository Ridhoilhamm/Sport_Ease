<?php

namespace App\Livewire;

use App\Models\transaksi;
use Livewire\Component;

class TransaksiPembayaran extends Component
{

    public $user_id, $lapangan_id, $jamSewa, $metode_pembayaran, $no_rekening, $nama_bank, $tanggalSewa;
    public $lapangan;
    public $user;

    // Validasi input
    public function simpanTransaksi()
    {
        // dd($this->lapangan, $this->tanggalSewa, $this->jamSewa, $this->harga);
        // Mengakses data dalam array lapangan
        $lapanganNama = $this->lapangan['name'];  // Akses nama lapangan
        $lapanganHarga = $this->lapangan['harga'];  // Akses harga lapangan

        // Membuat entri transaksi
        $transaksi = new Transaksi();
        $transaksi->id_user = auth()->user()->id;  // Ambil ID user yang sedang login
        $transaksi->lapangan = $lapanganNama;  // Nama lapangan yang disewa
        $transaksi->tanggal_sewa = $this->tanggalSewa;  // Tanggal sewa
        $transaksi->jam_sewa = $this->jamSewa;  // Jam sewa
        $transaksi->harga = $lapanganHarga;  // Harga lapangan yang sewa
        $transaksi->status = 'pending';  // Misalnya status awalnya adalah 'pending'
        // Menyimpan transaksi ke database
        $transaksi->save();
        // Memberikan pesan sukses setelah menyimpan
        session()->flash('message', 'Transaksi berhasil disimpan!');
        // Reset data atau tampilkan pesan sukses
        session()->flash('message', 'Transaksi berhasil disimpan.');
        $this->reset(); // Reset form
    }
    public function render()
    {
        return view('livewire.transaksi-pembayaran');
    }
}
