<?php

namespace App\Http\Controllers;

use App\Models\transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function storeTransaksi (Request $request){
        $validated = $request->validate([
            'lapangan'=>'required|string',
            'tanggal_sewa' => 'required',
            'jam_sewa' => 'required|string',
            'harga' => 'required|numeric',
            'status' => 'required|string',
            'nota_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        // Simpan nota jika ada
        if ($request->hasFile('nota_image')) {
            $notaPath = $request->file('nota_image')->store('nota_images', 'public');
        } else {
            $notaPath = null;
        }
    
        // Simpan transaksi ke database
        $transaction = transaksi::create([
            'tanggal_sewa' => $validated['tanggal_sewa'],
            'jam_sewa' => $validated['jam_sewa'],
            'harga' => $validated['harga'],
            'status' => $validated['status'],
            'nota_image' => $notaPath,  // Jika ada foto nota
        ]);
    
        return redirect()->route('user.pembayaran')->with('success', 'Transaksi berhasil dibuat.');
    }
}
