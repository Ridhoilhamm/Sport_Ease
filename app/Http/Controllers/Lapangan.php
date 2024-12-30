<?php

namespace App\Http\Controllers;

use App\Models\Lapangan as ModelsLapangan;
use Illuminate\Http\Request;

class Lapangan extends Controller
{
    public function index (){
       
        return view('lapangan');
    }
    // Controller
public function tampil()
{
//   $lapangan = Lapangan::get();
  return view('Lapangan.data',compact('lapangan'));

}
  public function detail(){
    // Ambil barang beserta detailnya
    $lapangan = \App\Models\Lapangan::with('detaillapangan')->find($id);

    // Cek apakah barang ditemukan
    if (!$lapangan) {
        return response()->json(['message' => 'lapangan tidak ditemukan'], 404);
    }

    return view('user.detail-lapangan', compact('lapangan'));
  }
}
