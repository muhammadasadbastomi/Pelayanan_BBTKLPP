<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function authenticate(Request $request)
    {
        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
            if (Auth::user()->status == 0) {
                Auth::logout();
                return redirect()->route('login')->withErrors('Akun anda belum di verifikasi oleh admin');
            }
            $request->session()->regenerate();

            switch (Auth::user()->role) {
                case 1:
                    return redirect('/admin/index');
                    break;
                case 2:
                    return redirect('/penyelia/index');
                    break;
                case 0:
                    return redirect('/pemohon/index');
                    break;
            }
        }

        return back()->withErrors([
            'username' => 'Username atau password salah',
        ]);

    }

    public function logout(Request $req)
    {
        Auth::logout();
        return redirect()->route('login')->withSuccess('Anda berhasil logout');
    }

    public function register()
    {
        return view('register');
    }
}
