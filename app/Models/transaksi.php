<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
    public function getlapangan()
    {
        return $this->belongsTo(Lapangan::class, 'id_lapangan');
    }
}
