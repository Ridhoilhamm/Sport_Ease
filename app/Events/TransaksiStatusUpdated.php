<?php

namespace App\Events;

use App\Models\transaksi;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class TransaksiStatusUpdated
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $transaksi;

    // Konstruktor untuk menerima data transaksi
    public function __construct(transaksi $transaksi)
    {
        $this->transaksi = $transaksi;
    }

    public function broadcastOn()
    {
        return new Channel('transaksi-status'); // Channel broadcast
    }
}
