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
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\UserController;
// use App\Livewire\AuthController;
use App\Livewire\Authh;
use App\Livewire\BookingForm;
use App\Livewire\BuktiPembayaran;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/detailkategory', function () {
//     return view('user.detail-kategory');
// });
Route::get('/favorite/lapangan', function () {
    return view('user.favorite');
});
// Route::get('/pembayaran', function () {
//     return view('user.pembayaran');
// });


Route::get('/tes', function () {
    return view('user.tes');
});
Route::get('/informasi-pembayaran', function () {
    return view('user.informasi-pembayaran');
});
Route::get('/kartudebit', function () {
    return view('user.form-kartu-debit');
});
// Route::get('/riwayat', function () {
//     return view('user.riwayat');
// });
Route::get('/riwayat-owner', function () {
    return view('owner.riwayat');
})->name('owner-riwayat');

Route::middleware('Rolemiddlware')->group(function (): void {

});
Route::get('/user', [UserController::class, 'dashboard'])->name('user.user');
// Route::get('/riwayat', action: [riwayatController::class, 'show']);
// Route::get('/riwayat/filter/{status}', [riwayatController::class, 'filter'])->name('transaksi.filter');
Route::get('/riwayat/status', [riwayatController::class, 'cari'])->name('riwayat-status');

Route::get('/data-diri', [DatadiriController::class, 'index'])->name('datadiri');
Route::get('/detailtransaksi/{id}', [TransaksiController::class, 'transaksibyid'])->name('detail-transaksi');
Route::get('/detailtransaksi/{transaksiId}', BuktiPembayaran::class)->name('detail-transaksi');



Route::get('/kategory', [LapanganController::class, 'index'])->name('lapangan');
// Route::get('/kategory/{}', [LapanganController::class, 'cariLapangan'])->name('query.lapangan');
Route::get('/lapangan/cari', [LapanganController::class, 'cari']);
Route::get('/detailkategory', [LapanganController::class, 'index'])->name('detail.kategory');
Route::get('/detaillapangan/{id}', [LapanganController::class, 'show'])->name('detaillapangan');
Route::post('/detaillapangan', [LapanganController::class, 'storelapangan'])->name('storelapangan');
Route::get('/pembayaran', [LapanganController::class, 'showPembayaran'])->name('user.pembayaran');
// Route::get('/transaksi/filter/{status}', [TransaksiController::class, 'filter'])->name('transaksi.filter');

// Route::get('/pembayaran/{id}', [TransaksiController::class, 'transaksibyid'])->name('detail-transaksi');



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
Route::get('/owner/detaillapangan/{id}', [lapanganOwnerController::class, 'showlapangan'])->name('detaillapangan-owner');
Route::get('/owner/tambahlapangan', [lapanganOwnerController::class, 'tambahlapangan'])->name('tambahlapangan-owner');
Route::post('/owner/tambahlapangan', [lapanganOwnerController::class, 'simpanlapangan'])->name('simpanlapangan-owner');
Route::get('/owner/edit/{id}', [lapanganOwnerController::class, 'editlapangan'])->name('editlapangan-owner');


// logout
Route::post('/logout', [UserController::class, 'logout'])->name('logout');