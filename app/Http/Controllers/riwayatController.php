<?php

namespace App\Http\Controllers;

use App\Models\transaksi;
use Illuminate\Http\Request;

class riwayatController extends Controller
{
    public function show(){
        $riwayat = transaksi::get();

        return view('user.riwayat', compact('riwayat'));
    }
}
