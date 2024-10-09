<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\RedirectResponse;
use App\Models\User;

class loginController extends Controller
{
    public function login(){
        return view('login');
    }
    public function authenticate(Request $request)
    {
        // Validasi input
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Cek kredensial login
        if (Auth::attempt($credentials)) {
            // Regenerasi session
            $request->session()->regenerate();

            // Ambil user yang sedang login
            $user = Auth::user();

            // Kondisi untuk role-based redirection
            if ($user->role === 'admin') {
                return redirect()->intended('dashboard');

            } elseif ($user->role === 'petugas') {
                return redirect()->intended('petugas/dashboard');
            } elseif ($user->role === 'siswa') {
                return redirect()->intended('user/dashboard');
            } else {
                // Jika role tidak dikenali, logout
                Auth::logout();
                return redirect('/login-page')->with('error', 'Role tidak dikenali.');
            }

        }

        // Jika kredensial salah
        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ])->onlyInput('email');
    }

    // Fungsi logout
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}


