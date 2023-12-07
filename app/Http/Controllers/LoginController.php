<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Session;

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
        // La autenticación fue exitosa

        // Obtén el usuario autenticado
        $user = Auth::user();

        // Almacena en la sesión los campos que deseas
        Session::put('user_name', $user->name);
        Session::put('user_last_name', $user->last_name);
        Session::put('user_email', $user->email);
        Session::put('user_name_hotel', $user->name_hotel);

        return redirect()->route('index');
    }

    // La autenticación falló
    return redirect()->route('login')->with('error', 'Verifica que el correo o la contraseña que se han introducido sean correctos');
}

public function logout()
{
    Session::flush();
    Auth::logout();

    // Redirige a la página de inicio o a donde desees después de cerrar sesión
    return redirect()->route('login');
}
    
}