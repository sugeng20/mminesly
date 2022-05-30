<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function lupaPassword()
    {
        return view('pages.auth.lupa-password');
    }

    public function authenticate(Request $request)
    {
        return redirect()->intended('selamat-datang');
    }
}
