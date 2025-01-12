<?php

namespace App\Http\Controllers;

use App\Models\Lapangan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Str;

class LapanganController extends Controller
{
    public function index()
    {
        $lapangan = Lapangan::get();
        $notFound = $lapangan->isEmpty();
        return view('user.kategori', compact('lapangan','notFound'));
    }
    public function jenis(Request $request)
    {
        $jenis = $request->input('jenis'); // Ambil parameter jenis dari URL atau form
        $lapangan = Lapangan::where('jenis', $jenis)->get(); // Filter berdasarkan jenis
        return view('user.kategori', compact('detail.kategory'));
    }

    public function cari(Request $request)
    {
        
        $query = $request->input('query');
        
        // Cari lapangan berdasarkan nama
        $lapangan = Lapangan::where('name', 'like', "%{$query}%")->get();
        
        // dd($lapangan);  // Untuk memeriksa hasil query
        
        // Jika tidak ditemukan, set flag notFound
        $notFound = $lapangan->isEmpty();
        
        return view('user.kategori', compact('lapangan', 'notFound' ));
    }


    public function show($id)
    {
        $lapangan= Lapangan::with('gambar_lapangan')->get();
        $lapangan = Lapangan::find($id);
        return view('user.detail-lapangan', compact('lapangan'));
    }

    public function storelapangan(Request $request)
    {
        $request->validate([
            'tanggal_sewa' => 'required|date',
            'lamaSewa' => 'required|numeric',
            'jamSewa' => 'required|date_format:H:i',
        ]);
        $data = [
            'tanggal_sewa' => $request->input('tanggal_sewa'),
            'lamaSewa' => $request->input('lama_sewa'),
            'jamSewa' => $request->input('jam_sewa'),
        ];

        dd($data);

        session()->put('data', $data);
        return redirect()->route('user.pembayaran');
    }
    public function showPembayaran()
    {
        // Mengambil data transaksi dari session
    $data = session()->get('data');

    // dd($data); // Lihat isi session untuk memastikan lapangan dan harga ada

    
    $tanggalSewa = $data['tanggal_sewa'] ?? null;
    // $harga = $data['harga'] ?? 0;
    $jamSewa = $data['jam_sewa'] ?? null;
    $lamaSewa = $data['lama_sewa'] ?? null;
    $lapangan = $data['lapangan'] ?? 'Tidak diketahui'; // Nama lapangan yang dipilih
    $user = Auth::user();

    // Kirim data transaksi dan pengguna ke view
    return view('user.pembayaran', compact('tanggalSewa', 'jamSewa', 'lapangan', 'user','lamaSewa'));
    }
}
