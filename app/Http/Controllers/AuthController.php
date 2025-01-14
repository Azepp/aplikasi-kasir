<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginView()
    {
        $title = "Login";
        return view("login", compact('title'));
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'input_username' => ['required', 'string', 'exists:users,username'], // Use 'exists' instead of 'unique'
            'input_password' => ['required', 'string'],
        ], [
            'input_username.string' => 'isi yang bener kontol',
            'input_username.required' => 'isi username nya goblok',
            'input_username.exist' => 'gaketemu  tolol bgt sih',

            'input_password.string' => 'isi yang bener kontol',
            'input_password.required' => 'isi passwordnya goblok',
        ]);

        // Corrected the semicolon to a comma and fixed the attempt logic
        if (Auth::attempt([
            'username' => $credentials['input_username'],
            'password' => $credentials['input_password'],
        ])) {
            $request->session()->regenerate();

            return redirect()->route('dashboard');
        }

        return back()->withErrors([
            'input_username' => 'Username anda tidak ditemukan', // Changed the key to match input name
        ])->onlyInput('input_username');
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login-page');
    }
}
