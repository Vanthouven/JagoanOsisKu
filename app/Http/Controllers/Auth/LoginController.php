<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Tampilkan form login
    public function showLoginForm()
    {
        return view('Auth.login');
    }

    // Proses login
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'nis'      => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);

        // Gunakan guard 'osis'
        if (Auth::guard('osis')->attempt($credentials, $request->filled('remember'))) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()
            ->withErrors(['nis' => 'NIS atau password salah.'])
            ->withInput($request->only('nis'));
    }

    // Proses logout
    public function logout(Request $request)
    {
        Auth::guard('osis')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
