<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Autenticación exitosa
            return redirect()->route('index');
        }

        // Autenticación fallida
        return redirect()->route('login')->with('error', 'Invalid credentials');
    }

}

