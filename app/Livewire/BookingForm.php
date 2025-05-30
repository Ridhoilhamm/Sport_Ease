<?php

namespace App\Livewire;

use Livewire\Component;

use Session;


class BookingForm extends Component
{
    public $tanggal_sewa;
    public $durasi_sewa;
    public $jam_sewa;
    public $lama_sewa;
    


    // Method untuk menyimpan data ke session
    public function saveBooking()
    {
        // Menyimpan data di session
        session()->put('tanggal_sewa', $this->tanggal_sewa);
        session()->put('durasi_sewa', $this->durasi_sewa);
        session()->put('lama_sewa', $this->lama_sewa);
        session()->put('jam_sewa', $this->jam_sewa);

        // Redirect ke halaman pembayaran
        return redirect()->route('pembayaran');
    }

    public function render()
    {
        return view('livewire.booking-form')->with(
            ['<style>
            .selected-time {
                background-color: #28a745 !important;
                color: white;
            }      
            .selected-time:hover {
                background-color: #218838 !important;
            }
        </style>']
        );
    }
}
