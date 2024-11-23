<?php

namespace App\Http\Controllers;

use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginView()
    {
        $title = "Login";
        return view("login", compact([
            'title',
        ]));
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required', 'string', 'exists:users, username'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('dashboard');
        }

        return back()->withErrors([
            'username' => 'Username anda tidak ditemukan',
        ])->onlyInput('input_username');
    }
}
