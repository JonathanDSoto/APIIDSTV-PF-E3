<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $user = User::where('email', $request->email)->first();

        if ($user && \Hash::check($request->password, $user->password)) {
            // La autenticación fue exitosa
            return redirect()->route('index');
        }

        // La autenticación falló
        return redirect()->route('login')->with('error', 'Invalid email or password.');
    }
}

