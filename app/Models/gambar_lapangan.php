<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gambar_lapangan extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function lapangan()
    {
        return $this->belongsTo(Lapangan::class);
    }
}
