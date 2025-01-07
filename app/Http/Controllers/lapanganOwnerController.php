<?php

namespace App\Http\Controllers;

use App\Models\Lapangan;
use Illuminate\Http\Request;

class lapanganOwnerController extends Controller
{
    public function index(){
        $lapangan= Lapangan::get();

        return view('owner.lapangan', compact('lapangan'));
    }

    public function showlapangan($id){

        $lapangan =Lapangan::find($id);
        return view('owner.detail-lapangan', compact('lapangan'));
    }
  
    
    public function tambahlapangan(){
        return view('owner.form-tambah-lapangan');
    }

    public function editlapangan($id){
{
    // Ambil data lapangan berdasarkan ID
    $lapangan = Lapangan::findOrFail($id); // Mengambil data dengan ID, error jika tidak ditemukan

    // Tampilkan view edit dengan data lapangan
    return view('owner.form-edit-lapangan', compact('lapangan'));
}

    }
}
    
    
        
    

