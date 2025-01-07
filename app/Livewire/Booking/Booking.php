<?php

namespace App\Livewire\Booking;

use App\Models\Lapangan;
use Livewire\Component;

class Booking extends Component
{
    public $lapangan, $date, $times, $get_time;

    public function mount($lapangan)
    {
        $this->lapangan = $lapangan;
        $this->times = [
            '08:00',
            '09:00',
            '10:00',
            '11:00',
            '12:00',
            '13:00',
            '14:00',
            '15:00',
            '16:00',
            '17:00',
            '18:00',
            '19:00',
            '20:00',
            '21:00',
            '22:00',
            '23:00'
        ];
    }

    public function choiceTime($time)
    {
        $this->get_time = $time;
    }

    public function submit()
    {
        $this->validate([
            'date' => 'required',
            'get_time' => 'required',
        ]);
    
        // Ambil nama lapangan yang dipilih
        $lapangan = $this->lapangan;
    
        // Ambil harga lapangan dari database berdasarkan nama lapangan
        $lapanganData = Lapangan::where('name', $lapangan)->first();
        // $lapangan = $lapanganData->name;
        // $harga = $lapanganData->harga;
    
        if ($lapanganData) {
            $harga = $lapanganData->harga;  // Ambil harga dari lapangan yang dipilih
        } else {
            $harga = 0;  // Jika lapangan tidak ditemukan, harga bisa diset 0 atau sesuai kebijakan
        }
    
        // Simpan data transaksi ke session, termasuk nama lapangan dan harga
        $data = [
            'tanggal_sewa' => $this->date,
            'jam_sewa' => $this->get_time,
            'harga' => $harga,
            'lapangan' => $lapangan,
        ];
    
        session()->put('data', $data);
    
        // Redirect ke halaman pembayaran
        return redirect()->route('user.pembayaran');
    }

    public function render()
    {
        return view('livewire.booking.booking');
    }
}
