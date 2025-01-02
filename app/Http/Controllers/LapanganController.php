<?php

namespace App\Http\Controllers;

use App\Models\Lapangan;
use Illuminate\Http\Request;
use Str;

class LapanganController extends Controller
{
    public function index (){
        $lapangan = Lapangan::get();
        return view('user.kategori', compact('lapangan'));
    }

    public function show($id){
        $lapangan =Lapangan::find($id);
        return view('user.detail-lapangan', compact('lapangan'));
    }
}
