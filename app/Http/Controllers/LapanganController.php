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

    public function BookingLapangan(Request $request)
        {
            $validatedData = $request->validate([
                'tanggal_sewa' => 'required|date',
                'jam_sewa' => 'required|in:08:00,09:00,10:00,11:00,12:00,13:00,14:00,15:00,16:00,17:00,18:00,19:00,20:00,21:00,22:00,23:00',
            ]);
            
            // Simpan data di session
            session()->put('tanggal_sewa', $validatedData['tanggal_sewa']);
            session()->put('jam_sewa', $validatedData['jam_sewa']);
            
            // Debug session
            dd(session()->all());
            
            // Redirect ke halaman pembayaran
            return redirect()->route('pembayaran');

}
}