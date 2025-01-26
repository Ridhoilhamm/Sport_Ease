<?php

namespace App\Livewire;

use Livewire\Component;

class OwnerPemberitahuan extends Component
{
    public $showModal = false;
    public $transaksi;

    protected $listeners = ['transaksiStatusUpdated' => 'handleTransaksiStatusUpdated'];

    public function handleTransaksiStatusUpdated(Transaksi $transaksi)
    {
        // Jika status transaksi adalah 'menunggu hari', tampilkan modal
        if ($transaksi->status == 'menunggu hari') {
            $this->transaksi = $transaksi;
            $this->showModal = true;  // Tampilkan modal
        }
    }
    public function render()
    {
        return view('livewire.owner-pemberitahuan');
    }
}
