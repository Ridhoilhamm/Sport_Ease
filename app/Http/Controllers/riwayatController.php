<?php

namespace App\Http\Controllers;

use App\Models\transaksi;
use Illuminate\Http\Request;

class riwayatController extends Controller
{
    // public function show(){
    //     $transaksi = transaksi::all();
    //     return view('user.riwayat', compact('transaksi'));
    // }

    public function filter($status)
    {
        // Ambil data transaksi berdasarkan status
        $transaksi = transaksi::where('status', $status)->get();

        // Kirim data ke view
        return view('user.riwayat', [
            'transaksi' => $transaksi,
            'status' => $status,
        ]);
    }
}
