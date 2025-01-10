<?php

namespace App\Http\Controllers;

use App\Models\Lapangan;
use Illuminate\Http\Request;

class OwnerController extends Controller
{
    public function index(){
        $lapangan = Lapangan::where('id_user', auth()->id())  // Filter berdasarkan user yang sedang login
        ->with('gambar_lapangan')  // Memuat relasi gambar lapangan jika ada
        ->get();

        return view('owner.home', compact('lapangan'));
    }
    
}
