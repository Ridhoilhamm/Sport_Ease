<?php

namespace App\Http\Controllers;

use App\Models\transaksi;
use Carbon\Carbon;
use Illuminate\Http\Request;

class riwayatController extends Controller
{
    public function show(){
        $transaksi = transaksi::all();
        $notFound = $transaksi->isEmpty();
        return view('user.riwayat', compact('transaksi','notFound'));
    }

    // public function filter($status = null)
    // {
    //     // Jika status disediakan dan valid, ambil transaksi berdasarkan status tersebut
    //     if ($status && in_array($status, ['menunggu hari', 'selesai', 'batal'])) {
    //         $transaksi = transaksi::where('status', $status)->get();
    //     } else {
    //         // Jika tidak ada status dipilih, ambil semua transaksi
    //         $transaksi = transaksi::all();
    //     }
    //     dd($transaksi);
    //     // Kirim data transaksi dan status ke view
    //     return view('user.riwayat', compact('transaksi', 'status'));
    // }

    public function cari(Request $request)
{
    $query = $request->input('query');
    $tanggal = $request->input('tanggal'); // Ambil input tanggal
    $bulan = $request->input('bulan'); // Ambil input bulan
    $tahun = $request->input('tahun'); // Ambil input tahun

    // Ambil user yang sedang login
    $user = auth()->user();

    $transaksi = transaksi::query();

    // Filter berdasarkan status
    if ($query !== 'all') {
        $transaksi->where('status', 'like', "%{$query}%");
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

    // Filter transaksi berdasarkan user yang membuatnya
    $transaksi->where('id_user', $user->id);

    // Ambil transaksi yang sudah difilter
    $transaksi = $transaksi->latest()->get();

    $notFound = $transaksi->isEmpty();

    return view('user.riwayat', compact('transaksi', 'notFound'));
}


    

    public function filterTransaksi(Request $request)
{
    $query = Transaksi::query();  // Misalkan model Transaksi

    // Memeriksa parameter tanggal
    if ($request->has('tanggal')) {
        $tanggal = $request->input('tanggal');

        if ($tanggal == 'today') {
            // Filter transaksi hari ini
            $query->whereDate('tanggal_transaksi', Carbon::today());
        } elseif ($tanggal == 'last_week') {
            // Filter transaksi seminggu yang lalu
            $query->whereBetween('tanggal_transaksi', [
                Carbon::now()->subWeek()->startOfWeek(),
                Carbon::now()->subWeek()->endOfWeek(),
            ]);
        } elseif ($tanggal == 'this_month') {
            // Filter transaksi bulan ini
            $query->whereMonth('tanggal_transaksi', Carbon::now()->month);
        } elseif ($tanggal == 'custom') {
            // Implementasikan filter berdasarkan rentang tanggal khusus, misalnya dengan dua input tanggal
            $start_date = $request->input('start_date');
            $end_date = $request->input('end_date');

            if ($start_date && $end_date) {
                $query->whereBetween('tanggal_transaksi', [$start_date, $end_date]);
            }
        }
    }

    // Ambil data transaksi setelah diterapkan filter
    $transaksi = $query->get();

    return view('riwayat.status', compact('transaksi'));
}
    
    
}
