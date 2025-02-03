<?php

namespace App\Http\Controllers;

use App\Models\transaksi;
use Illuminate\Http\Request;

class riwayatOwnerController extends Controller
{
    public function index(Request $request){
        $query = $request->input('query');
    $tanggal = $request->input('tanggal'); // Ambil input tanggal
    $bulan = $request->input('bulan'); // Ambil input bulan
    $tahun = $request->input('tahun'); // Ambil input tahun

    $transaksi = transaksi::query();

    // Filter berdasarkan status
    if ($query !== 'all') {
        $transaksi->where('lapangan', 'like', "%{$query}%");
    }

    // Filter berdasarkan tanggal jika ada
    if ($tanggal) {
        $transaksi->whereDate('tanggal_sewa', $tanggal);
    }

    // Filter berdasarkan bulan jika ada
    if ($bulan) {
        $transaksi->whereMonth('tanggal_sewa', $bulan);
    }

    // Filter berdasarkan tahun jika ada
    if ($tahun) {
        $transaksi->whereYear('tanggal_sewa', $tahun);
    }

    // Ambil transaksi yang sudah difilter
    $transaksi = $transaksi->latest()->get();

    $notFound = $transaksi->isEmpty();

    return view('owner.riwayat', compact('transaksi','notFound'));
    }

    public function transaksibyid($id)
    {
        $transaksi = Transaksi::with(['user', 'getlapangan'])->find($id);

        if (!$transaksi) {
            return redirect()->back()->with('error', 'Transaksi tidak ditemukan.');
        }
        return view('owner.detail-transaksi', compact('transaksi'));
    }
    public function riwayatbyid($id)
    {
        $transaksi = Transaksi::with(['user', 'getlapangan'])->find($id);

        if (!$transaksi) {
            return redirect()->back()->with('error', 'Transaksi tidak ditemukan.');
        }
        return view('owner.detail-riwayat', compact('transaksi'));
    }
}
