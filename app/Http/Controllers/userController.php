<?php

namespace App\Http\Controllers;

use App\Models\artikel;
use App\Models\ContentSlider;
use App\Models\Lapangan;
use App\Models\transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // Menampilkan halaman dashboard user
    public function dashboard()
    {
        $slider = ContentSlider::get();
        $terdekat = Lapangan::latest()->take(3)->get(); // Atau sesuaikan query sesuai kebutuhan
        $rekomendasi = Lapangan::latest()->take(6)->get();
        // $transaksi = transaksi::where('id_user', auth()->id()) // Filter berdasarkan pengguna yang login
        // ->whereIn('status', ['pending', 'menunggu hari']) // Filter berdasarkan status 'pending' atau 'menunggu hari'
        // ->whereDate('tanggal_sewa', '>=', Carbon::today()) // Filter tanggal sewa yang dimulai dari hari ini atau lebih
        // ->latest() // Urutkan berdasarkan waktu terbaru
        // ->take(3)  // Ambil hanya 3 transaksi terakhir
        // ->get();   // 
        $transaksi = transaksi::where('id_user', auth()->id()) // Filter berdasarkan id_user
        ->whereIn('status', ['pending', 'menunggu hari']) // Filter berdasarkan status
        ->get(); // Dapatkan hasil
    
        // Ambil data berita seputar olahraga
        $seputarOlahraga = Artikel::where('status', '!=', 'aktif')->latest()->get();

 // Atau sesuaikan query sesuai kebutuhan

        // Kirim data ke view
        return view('user.user', compact('terdekat', 'seputarOlahraga','rekomendasi','slider','transaksi'));
        
    }




    // Menampilkan halaman untuk mengedit profil pengguna
    public function editProfile()
    {
        // Mendapatkan data user yang sedang login
        $user = Auth::user();

        // Mengirim data user ke view edit profile
        return view('user.edit-profile', compact('user'));
    }

    // Memperbarui data profil pengguna
    public function updateProfile(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . Auth::id(),
            'password' => 'nullable|min:8|confirmed',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validasi gambar
        ]);

        // Mendapatkan user yang sedang login
        $user = Auth::user();

        // Update nama dan email
        $user->name = $request->name;
        $user->email = $request->email;

        // Jika password baru diisi, maka update password
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        // Jika ada gambar yang diupload, simpan gambar
        if ($request->hasFile('avatar')) {
            // Menghapus gambar lama jika ada
            if ($user->avatar) {
                unlink(public_path('storage/' . $user->avatar));
            }

            // Menyimpan gambar baru
            $avatarPath = $request->file('avatar')->store('avatars', 'public');
            $user->avatar = $avatarPath;
        }

        // Simpan perubahan data user
        $user->save();

        // Redirect kembali ke halaman dashboard dengan pesan sukses
        return redirect()->route('user.dashboard')->with('success', 'Profil berhasil diperbarui!');
    }

    // Fungsi untuk mengubah password
    public function changePassword(Request $request)
    {
        // Validasi input
        $request->validate([
            'current_password' => 'required|min:8',
            'new_password' => 'required|min:8|confirmed',
        ]);

        $user = Auth::user();

        // Memeriksa apakah password lama yang dimasukkan sesuai dengan yang ada di database
        if (!Hash::check($request->current_password, $user->password)) {
            return redirect()->back()->withErrors(['current_password' => 'Password lama tidak sesuai']);
        }

        // Update password
        $user->password = Hash::make($request->new_password);
        $user->save();

        // Redirect ke halaman dashboard dengan pesan sukses
        return redirect()->route('user.dashboard')->with('success', 'Password berhasil diperbarui!');
    }

    public function logout(Request $request)
{
    Auth::logout();  // Mengeluarkan pengguna dari sesi
    $request->session()->invalidate();  // Menghapus sesi
    $request->session()->regenerateToken();  // Menghindari serangan CSRF
    return redirect('/auth/login');  // Redirect ke halaman utama atau login
}

}
