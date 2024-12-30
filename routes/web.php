<?php

use App\Http\Controllers\artikel;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\HightLight;
use App\Http\Controllers\Kategori;
use App\Http\Controllers\Lapangan;
use App\Http\Controllers\LapanganController;
use App\Http\Controllers\Owner;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\riwayatController;
use App\Http\Controllers\UserController;
use App\Livewire\AuthController;
use App\Livewire\Authh;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('user.user');
});
Route::get('/detailkategory', function () {
    return view('user.detail-kategory');
});
// auth
// Route::get('/login', AuthController::class)->name('login');


// Route::get('/user', function () {
//     return view('user.user');
// });
Route::get('/detaillapangan', function () {
    return view('user.detail-lapangan');
});
// Route::get('/detailartikel', function () {
//     return view('user.detail-artikel');
// });
Route::get('/pembayaran', function () {
    return view('user.pembayaran');
});
Route::get('/tes', function () {
    return view('user.tes');
});
Route::get('/data-diri', function () {
    return view('user.data-diri');
});
Route::get('/informasi-pembayaran', function () {
    return view('user.informasi-pembayaran');
});
// Route::get('/tambahkartu', function () {
//     return view('user.tambah-kartu');
// });
Route::get('/kartudebit', function () {
    return view('user.form-kartu-debit');
});
Route::get('/riwayat', function () {
    return view('user.riwayat');
});

Route::get('/login', AuthController::class)->name('login');

// Route::get('/login', AuthController::class)->name('login');


//halaman owner

Route::get('/riwayat', [riwayatController::class, 'show'])->name('riwayat');
Route::get('/user', [UserController::class, 'dashboard'])->name('user.user');


//halaman lapangan
// Route::get('/lapangan', [LapanganController::class, 'index'])->name('lapangan');


//halaman kategory
Route::get('/kategory', [Kategori::class, 'kategori'])->name('kategori');

//halaman artikel
Route::get('/artikel', [ArtikelController::class, 'index'])->name('artikel');
Route::get('/detailartikel/{id}', [ArtikelController::class, 'show'])->name('artikel-show');


//halaman hightlight
Route::get('/hightlight', [HightLight::class, 'data'])->name('data');




// require __DIR__.'/auth.php';
