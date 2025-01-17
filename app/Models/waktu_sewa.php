<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class waktu_sewa extends Model
{
    use HasFactory;

    protected $table = 'waktu_sewa';

    protected $fillable = [
        'transaksi_id',
        'lapangan_id',
        'start_time',
        'end_time',
    ];

    public function transaksi()
    {
        return $this->belongsTo(Transaksi::class);
    }

    public function lapangan()
    {
        return $this->belongsTo(Lapangan::class);
    }
}
