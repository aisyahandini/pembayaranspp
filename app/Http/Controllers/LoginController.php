<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Menampilkan form login.
     */
    public function login()
    {
        return view('login');
    
    }
    public function authenticate(Request $request):RedirectResponse
    {
         $credentials = $request->validate([
            'email' => ['required','email'],
            'password' =>['required'],
         ]);
         if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('halaman-utama');
         }

         return back()->withErrors([
            'email' => 'email / password salah.',
         ])->onlyInput('email');


    }

}   


    