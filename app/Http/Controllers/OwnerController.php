<?php

namespace App\Http\Controllers;

use App\Models\Lapangan;
use App\Models\transaksi;
use Illuminate\Http\Request;

class OwnerController extends Controller
{
        public function index(Request $request)
        {
            // Periksa transaksi yang sedang menunggu
            // / Mendapatkan transaksi terbaru yang statusnya 'menunggu hari'
    $transaksi = Transaksi::where('status', 'menunggu hari')->latest()->first();

    // Mendapatkan peran pengguna yang sedang login
    $userRole = auth()->user()->role;  // Asumsikan role disimpan di kolom 'role'

    // Kirimkan data transaksi dan peran ke view
    return view('owner.home', compact('transaksi', 'userRole'));
        }
    }
    

