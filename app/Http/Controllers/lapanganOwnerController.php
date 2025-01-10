<?php

namespace App\Http\Controllers;

use App\Models\Lapangan;
use Illuminate\Http\Request;

class lapanganOwnerController extends Controller
{
    public function index(){
        $lapangan = Lapangan::where('id_user', auth()->id())  // Filter berdasarkan user yang sedang login
        ->with('gambar_lapangan')  // Memuat relasi gambar lapangan jika ada
        ->get();
        // $lapangan= Lapangan::get();

        return view('owner.lapangan', compact('lapangan'));
    }

    public function showlapangan($id){
        $lapangan = Lapangan::where('id', $id)
        ->where('id_user', auth()->id())  // Memastikan lapangan hanya milik pengguna yang sedang login
        ->with('gambar_lapangan')  // Memuat relasi gambar lapangan
        ->first();
        $lapangan =Lapangan::find($id);
        return view('owner.detail-lapangan', compact('lapangan'));
    }
  
    
    public function tambahlapangan(){
        
        return view('owner.form-tambah-lapangan');
    }

    public function simpanlapangan(Request $request){
         // Validasi input dari form
         $request->validate([
            'name' => 'required|string|max:255',
            'jenis' => 'required|string|max:50',
            'jumlah_lapangan' => 'required|integer|min:1',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'lokasi_tempat' => 'required|max:255',
            'harga'=>'required|numeric',
            'fasilitas'=>'required',
            'deskripsi'=>'required',
        
        ]);
        $filePath = $request->file('foto')->store('lapangans', 'public');
        // Simpan data lapangan ke database
         $lapangan= Lapangan::create([
            'name' => $request->name,
            'jenis' => $request->jenis,
            'jumlah_lapangan' => $request->jumlah_lapangan,
            'foto' => $filePath,
            'lokasi_tempat' => $request->lokasi_tempat,
            'harga'=>$request->harga,
            'fasilitas'=>$request->fasilitas,
            'deskripsi'=>$request->deskripsi,
            'id_user' => auth()->id(), // Mengisi id_user dari user yang sedang login
        ]);
        if ($request->hasFile('url')) {
            $imagePath = $request->file('url')->store('lapangans', 'public'); // Menyimpan gambar di folder 'lapangan_images'
    
            // Simpan detail gambar di tabel 'detail_lapangan'
            $lapangan->detailLapangan()->create([
                'url' => $imagePath, // Simpan path gambar
            ]);
        }
        return redirect('/owner/lapangan')->with('success', 'Lapangan berhasil ditambahkan!');
        // Redirect ke halaman lapangan dengan pesan sukses
    }

    public function editlapangan($id){
{
    // Ambil data lapangan berdasarkan ID
    $lapangan = Lapangan::findOrFail($id); // Mengambil data dengan ID, error jika tidak ditemukan

    // Tampilkan view edit dengan data lapangan
    return view('owner.form-edit-lapangan', compact('lapangan'));
}

    }
}
    
    
        
    

