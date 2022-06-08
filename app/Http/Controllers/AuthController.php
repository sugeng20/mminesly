<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('pages.auth.login');
    }

    public function register()
    {
        return view('pages.auth.register');
    }

    public function registration(Request $request)
    {
        $request->validate([
            'nis_nik' => 'required|unique:users,nis_nik',
            'password' => 'required',
            'nama_depan' => 'required',
            'nama_belakang' => 'required',
            'email' => 'required',
            'role' => 'required',
        ]);

        $data = $request->all();
        $data['password'] = Hash::make($request->password);
        User::create($data);
        return redirect()->route('login')->with('status', 'Berhasil Daftar Akun, Silahkan masuk menggunakan akun username dan password yang sudah didaftarkan');
    }

    public function lupaPassword()
    {
        return view('pages.auth.lupa-password');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'nis_nik' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('nis_nik', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('selamat-datang');
        }

        return back()->withErrors([
            'nis_nik' => 'NiS/NIK dan Password tidak cocok!',
        ]);
    }
}
