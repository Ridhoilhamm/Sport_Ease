<?php

use App\Http\Controllers\artikel;
use App\Http\Controllers\HightLight;
use App\Http\Controllers\Kategori;
use App\Http\Controllers\Lapangan;
use App\Http\Controllers\Owner;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\riwayatController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/user', function () {
    return view('user.user');
});
Route::get('/detaillapangan', function () {
    return view('user.detail-lapangan');
});
Route::get('/detailartikel', function () {
    return view('user.detail-artikel');
});
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
Route::get('/tambahkartu', function () {
    return view('user.tambah-kartu');
});
// Route::get('/riwayat', function () {
//     return view('user.riwayat');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



//halaman owner
Route::get('/owner', [Owner::class, 'data'])->name('owner');
Route::get('/riwayat', [riwayatController::class, 'show'])->name('riwayat');


//halaman lapangan
Route::get('/lapangan', [Lapangan::class, 'index'])->name('lapangan');


//halaman kategory
Route::get('/kategory', [Kategori::class, 'kategori'])->name('kategori');

//halaman artikel
Route::get('/artikel', [artikel::class, 'artikel'])->name('artikel');


//halaman hightlight
Route::get('/hightlight', [HightLight::class, 'data'])->name('data');




require __DIR__.'/auth.php';
