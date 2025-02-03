<?php

namespace App\Http\Controllers;

use App\Models\Lapangan;
use Illuminate\Http\Request;

class favorite_lapangan extends Controller
{
    public function favorite()
    {
        $userId = auth()->id();
        $lapangansFavorit = Lapangan::where('is_favorite', true)
                                    ->where('id_user', $userId)
                                    ->get();
    
        $notFound = $lapangansFavorit->isEmpty(); 
    
        // Mengirim data ke view
        return view('user.favorite', compact('lapangansFavorit', 'notFound'));
    }
    


    public function hapusFavorit($id)
    {
        // Mencari lapangan berdasarkan ID
        $lapangan = Lapangan::findOrFail($id);
        
        // Mengubah status is_favorite menjadi false atau null
        $lapangan->is_favorite = null; // Anda bisa juga menggunakan false di sini
        $lapangan->save(); // Simpan perubahan
        
        // Kembali ke halaman sebelumnya dengan pesan sukses
        return redirect()->back()->with('success', 'Lapangan berhasil dihapus dari favorit.');
    }


}
