<?php

namespace App\Http\Controllers;

use App\Models\Lapangan;
use App\Models\transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class OwnerController extends Controller
{
    public function index(Request $request)
    {
        $transaksi = Transaksi::where('status', 'menunggu hari')->latest()->first();

        // Mendapatkan peran pengguna yang sedang login
        $userRole = auth()->user()->role;  // Asumsikan role disimpan di kolom 'role'

        // Kirimkan data transaksi dan peran ke view
        return view('owner.home', compact('transaksi', 'userRole'));
    }


    public function transaksiview(Request $request)
    {
        // Ambil filter tanggal dari request
        $filter = $request->input('filter', 'hari ini');
        $selectedDate = $request->input('selected_date'); // Ambil tanggal yang dipilih user

        // Tentukan rentang waktu berdasarkan filter
        switch ($filter) {
            case 'hari ini':
                $start = Carbon::today();
                $end = Carbon::today()->endOfDay();
                break;

            case 'besok':
                $start = Carbon::tomorrow();
                $end = Carbon::tomorrow()->endOfDay();
                break;

            case 'tanggal': // Jika user memilih tanggal tertentu
                if ($selectedDate) {
                    $start = Carbon::parse($selectedDate)->startOfDay();
                    $end = Carbon::parse($selectedDate)->endOfDay();
                } else {
                    $start = Carbon::today();
                    $end = Carbon::today()->endOfDay();
                }
                break;

            default:
                $start = Carbon::today();
                $end = Carbon::today()->endOfDay();
                break;
        }

        // Query transaksi berdasarkan rentang waktu
        $transaksi = Transaksi::whereBetween('tanggal_sewa', [$start, $end])
            ->orderBy('tanggal_sewa', 'asc')
            ->get();

        return view('owner.home', [
            'transaksi' => $transaksi,
            'filter' => $filter,
            'selectedDate' => $selectedDate
        ]);
    }
}
