<?php

namespace App\Http\Controllers;

use App\Models\AkunSosmed;
use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Jantinnerezo\LivewireAlert\LivewireAlert;
;
use Illuminate\Support\Str;

class authController extends Controller
{
    // use LivewireAlert;

    public function index(){
        $sosmed = AkunSosmed::get();


        return view('auth.login', compact('sosmed'));
    }

    public function login(Request $request) {
        $request->validate([
            'email'=>'required',
            'password'=>'required'

        ],[
            'email.required'=>'Isi Email Anda ',
            'password.required'=>'Isi Password Anda',
        ]);
        $infologin =[
            'email'=>$request->email,
            'password'=>$request->password
        ];

        if (Auth::attempt($infologin)) {
            $user = Auth::user(); // Mendapatkan data user yang login
            session()->flash('login_message', "Selamat datang, {$user->name}!");
            // Redirect berdasarkan role
            if ($user->role === 'admin') {
                return redirect('/admin');
            } elseif ($user->role === 'owner') {
                return redirect('/owner');
            } elseif ($user->role === 'user') {
                return redirect('/user');
            } else {
                Auth::logout(); // Logout jika role tidak dikenal
                return redirect('/login')->withErrors('Role tidak dikenali, silakan hubungi admin.');
            }
        } else {
            return redirect('/login')
                ->withErrors('Username atau Password yang dimasukkan tidak sesuai')
                ->withInput();
        }
        
    }
    
    public function registrasi(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ], [
            'name.required' => 'Nama wajib diisi',
            'email.required' => 'Email wajib diisi',
            'email.unique' => 'Email sudah terdaftar',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Password minimal 6 karakter',
            'password.confirmed' => 'Konfirmasi password tidak cocok',
        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'user', // Default role
        ]);

        Auth::login($user); // Auto login setelah registrasi
        // $this->alert('success', 'Informasi pengguna berhasil diperbarui');
        return redirect('/login')->with('berhasil daftar akun');
    }

    public function showregistrasi()
    {
        return view('auth.registrasi');
    }


    public function reset(){
        return view('auth.reset');
    }
    public function logicreset(Request $request){

        $request->validate(['email' => 'required|email']);
 
        $status = Password::sendResetLink(
            $request->only('email')
        );
     
        if ($status === Password::RESET_LINK_SENT) {
            return back()->with('success', 'Link reset password telah dikirim ke email Anda.');
        } else {
            return back()->withErrors(['email' => 'Gagal mengirim link reset password.']);
        }
        
    }

    public function hello($token){
        return view('auth.konfirmasi-password', ['token' => $token]);
    }

    public function updatepassword(Request $request) {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]);
        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function (User $user, string $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));
    
                $user->save();
    
                event(new PasswordReset($user));
            }
        );
    
        // Cek apakah reset password berhasil
        if ($status === Password::PASSWORD_RESET) {
            return redirect()->route('login')->with('status', __('Password berhasil direset. Silakan login dengan password baru.'));
        } else {
            return back()->withErrors(['email' => __('Gagal mereset password. Pastikan email dan token valid.')]);
        }
    }
}
