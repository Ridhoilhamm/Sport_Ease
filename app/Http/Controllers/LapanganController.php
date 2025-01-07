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
        return view('user.kategori', compact('lapangan'));
    }

    public function show($id)
    {
        $lapangan = Lapangan::find($id);
        return view('user.detail-lapangan', compact('lapangan'));
    }

    public function storelapangan(Request $request)
    {
        $request->validate([
            'tanggal_sewa' => 'required|date',
            'jam_sewa' => 'required|date_format:H:i',
        ]);



        $data = [
            'tanggal_sewa' => $request->input('tanggal_sewa'),
            'jam_sewa' => $request->input('jam_sewa'),
        ];

        dd($data);

        session()->put('data', $data);


        // Redirect ke halaman pembayaran
        return redirect()->route('user.pembayaran');
    }
    public function showPembayaran()
    {
        // Mengambil data transaksi dari session
    $data = session()->get('data');

    // Debug untuk memastikan data ada di session
    // dd($data); // Lihat isi session untuk memastikan lapangan dan harga ada

    // Ambil nama lapangan, harga, tanggal sewa, dan jam sewa dari session
    $tanggalSewa = $data['tanggal_sewa'] ?? null;
    $jamSewa = $data['jam_sewa'] ?? null;
    $harga = $data['harga'] ?? 0;
    $lapangan = $data['lapangan'] ?? 'Tidak diketahui'; // Nama lapangan yang dipilih

    // Ambil informasi pengguna yang sedang login
    $user = Auth::user();

    // Kirim data transaksi dan pengguna ke view
    return view('user.pembayaran', compact('tanggalSewa', 'jamSewa', 'harga', 'lapangan', 'user'));
    }
}
