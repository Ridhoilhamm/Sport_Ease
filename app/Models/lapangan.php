<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lapangan extends Model
{
    use HasFactory;

    protected $guarded=[];
    
    public function detailLapangan()
    {
        return $this->hasMany(detaillapangan::class);  // Karena satu lapangan bisa memiliki banyak detail
    }
    public function gambar_lapangan()
    {
        return $this->hasMany(gambar_lapangan::class, 'lapangan_id', 'id');
    }
}
