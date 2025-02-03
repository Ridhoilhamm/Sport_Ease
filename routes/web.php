<?php

use App\Http\Controllers\artikel;
use App\Http\Controllers\ArtikelController;
use App\Http\authController;
use App\Http\Controllers\authController as ControllersAuthController;
use App\Http\Controllers\DatadiriController;
use App\Http\Controllers\favorite_lapangan;
use App\Http\Controllers\HightLight;
use App\Http\Controllers\Kategori;
use App\Http\Controllers\Lapangan;
use App\Http\Controllers\LapanganController;
use App\Http\Controllers\lapanganOwnerController;
use App\Http\Controllers\Owner;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProfilePenjagaLapangan;
use App\Http\Controllers\riwayatController;
use App\Http\Controllers\riwayatOwnerController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\UserController;
use App\Livewire\Auth\Registrasi;
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

Route::get('/favorite/lapangan', [favorite_lapangan::class, 'favorite'])->name('favorite');
// Route::patch('/favorite/lapangan/{id}', [favorite_lapangan::class, 'hapusFavorit'])->name('hapus-favorit');
Route::delete('/favorite/lapangan/{id}', [favorite_lapangan::class, 'hapusFavorit'])->name('hapus-favorite');




Route::post('/forgot-password', function (Request $request) {
})->middleware('guest')->name('password.email');

Route::get('/tes', function () {
    return view('user.tes');
});
Route::get('/informasi-pembayaran', function () {
    return view('user.informasi-pembayaran');
});
Route::get('/kartudebit', function () {
    return view('user.form-kartu-debit');
});



Route::get('/user', [UserController::class, 'dashboard'])->name('user.user');
// Route::get('/riwayat', action: [riwayatController::class, 'show']);
// Route::get('/riwayat/filter/{status}', [riwayatController::class, 'filter'])->name('transaksi.filter');
Route::get('/riwayat/status', [riwayatController::class, 'cari'])->name('riwayat-status')->middleware('auth');

Route::get('/data-diri', [DatadiriController::class, 'index'])->name('datadiri')->middleware('auth');
Route::get('/detailtransaksi/{id}', [TransaksiController::class, 'transaksibyid'])->name('detail-transaksi');
Route::get('/detailriwayat/{id}', [TransaksiController::class, 'view'])->name('detail-riwayat');
Route::get('/detailtransaksi/{transaksiId}', BuktiPembayaran::class)->name('detail-transaksi');
// Route::get('/detailriwayat/{transaksiId}', BuktiPembayaran::class)->name('detail-riwayat');



Route::get('/kategory', [LapanganController::class, 'index'])->name('lapangan');
// Route::get('/kategory/{}', [LapanganController::class, 'cariLapangan'])->name('query.lapangan');
Route::get('/lapangan/cari', [LapanganController::class, 'cari']);
Route::get('/detailkategory', [LapanganController::class, 'index'])->name('detail.kategory');
Route::get('/detaillapangan/{id}', [LapanganController::class, 'show'])->name('detaillapangan')->middleware('auth');
Route::post('/detaillapangan', [LapanganController::class, 'storelapangan'])->name('storelapangan');
Route::get('/pembayaran', [LapanganController::class, 'showPembayaran'])->name('user.pembayaran');
// Route::get('/transaksi/filter/{status}', [TransaksiController::class, 'filter'])->name('transaksi.filter');

// Route::get('/pembayaran/{id}', [TransaksiController::class, 'transaksibyid'])->name('detail-transaksi');



//halaman artikel
Route::get('/artikel', [ArtikelController::class, 'index'])->name('artikel');
Route::get('/detailartikel/{id}', [ArtikelController::class, 'show'])->name('artikel-show');

// Route::get('/detaillapangan/{id}', [Lapangan::class, 'show'])->name('lapangan');
//auth
Route::get('/login', [\App\Http\Controllers\authController::class, 'index'])->name('login');
Route::post('/login', [\App\Http\Controllers\authController::class, 'login'])->name('auth-login');
Route::get('/registrasi', Registrasi::class)->name('registrasi');
// Route::post('/registrasi', [\App\Http\Controllers\authController::class, 'registrasi'])->name('registrasi');
Route::get('/registrasi', [\App\Http\Controllers\authController::class, 'showregistrasi'])->name('auth-registrasi');

Route::get('/reset/password', [\App\Http\Controllers\authController::class, 'reset'])->name('reset');
Route::post('/reset/password', [\App\Http\Controllers\authController::class, 'logicreset'])->name('password-email');
Route::get('/reset-password/{token}', [\App\Http\Controllers\authController::class, 'hello'])->name('password.reset');
Route::post('/reset-password', [\App\Http\Controllers\authController::class, 'updatepassword'])->name('password.update');

//halaman hightlight
Route::get('/hightlight', [HightLight::class, 'data'])->name('data');

//halaman Owner
Route::get('/owner', [OwnerController::class, 'transaksiview'])->name('transaksi.index')->middleware('auth');
Route::get('/owner/lapangan', [lapanganOwnerController::class, 'index'])->name('owner.lapangan');
Route::get('/owner/detaillapangan/{id}', [lapanganOwnerController::class, 'showlapangan'])->name('detaillapangan-owner');
Route::get('/owner/tambahlapangan', [lapanganOwnerController::class, 'tambahlapangan'])->name('tambahlapangan-owner');
Route::post('/owner/tambahlapangan', [lapanganOwnerController::class, 'simpanlapangan'])->name('simpanlapangan-owner');
Route::get('/owner/edit/{id}', [lapanganOwnerController::class, 'editlapangan'])->name('editlapangan-owner');
Route::get('/profile/penjaga', [ProfilePenjagaLapangan::class, 'index'])->name('profile-penjaga');
Route::get('/riwayat-owner', [riwayatOwnerController::class, 'index'])->name('owner-riwayat');
Route::get('/detailtransaksi/penjaga/{id}', [riwayatOwnerController::class, 'transaksibyid'])->name('detail-transaksi-owner');
Route::get('/detailriwayat/penjaga/{id}', [riwayatOwnerController::class, 'riwayatbyid'])->name('detail-riwayat-owner');
// Route::get('/owner', [OwnerController::class, 'transaksiview'])->name('transaksi.index');


// Route::get('/riwayat-owner', function () {
//     return view('owner.riwayat');
// })->name('owner-riwayat');


// logout
Route::post('/logout', [UserController::class, 'logout'])->name('logout');