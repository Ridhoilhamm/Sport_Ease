<?php

use App\Http\Controllers\artikel;
use App\Http\Controllers\ArtikelController;
use App\Http\authController;
use App\Http\Controllers\DatadiriController;
use App\Http\Controllers\HightLight;
use App\Http\Controllers\Kategori;
use App\Http\Controllers\Lapangan;
use App\Http\Controllers\LapanganController;
use App\Http\Controllers\lapanganOwnerController;
use App\Http\Controllers\Owner;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\riwayatController;
use App\Http\Controllers\UserController;
// use App\Livewire\AuthController;
use App\Livewire\Authh;
use App\Livewire\BookingForm;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('user.user');
// });
Route::get('/detailkategory', function () {
    return view('user.detail-kategory');
});
// auth
// Route::post('/login', AuthController::class)->name('login');


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

Route::middleware('auth')->group(function (): void {
    
});
Route::get('/riwayat', [riwayatController::class, 'show'])->name('riwayat');
Route::get('/user', [UserController::class, 'dashboard'])->name('user.user');

Route::get('/data-diri',[DatadiriController::class, 'index'])->name('datadiri');



Route::get('/kategory', [LapanganController::class, 'index'])->name('lapangan');
Route::get('/detaillapangan/{id}', [LapanganController::class, 'show'])->name('detaillapangan');
Route::post('/detaillapangan', [LapanganController::class, 'BookingLapangan'])->name('booking');

//halaman artikel
Route::get('/artikel', [ArtikelController::class, 'index'])->name('artikel');
Route::get('/detailartikel/{id}', [ArtikelController::class, 'show'])->name('artikel-show');

// Route::get('/detaillapangan/{id}', [Lapangan::class, 'show'])->name('lapangan');
//auth
Route::get('/auth/login', [\App\Http\Controllers\authController::class, 'index'])->name('auth-login');
Route::post('/auth/login', [\App\Http\Controllers\authController::class, 'login'])->name('auth-login');


//halaman hightlight
Route::get('/hightlight', [HightLight::class, 'data'])->name('data');

//halaman Owner
Route::get('/owner', [OwnerController::class, 'index'])->name('owner');
Route::get('/owner/lapangan', [lapanganOwnerController::class, 'index'])->name('owner.lapangan');



