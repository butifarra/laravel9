<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthenticatedSessionController extends Controller
{
    public function store(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string'],
        ]);
        if (!Auth::attempt($credentials, $request->boolean('remember'))) { //si el checkbox devuelve on
            //el método lo transforma a true, que es lo que recibe el método attempt.
            //login failed
            throw ValidationException::withMessages([
                'email' => __('auth.failed') //este mensaje es traducible
            ]);
        }
        $request->session()->regenerate();
        //Acá podría enviarlo a la ruta dashboard
        return redirect()->intended()->with('status', 'You are logged in');
    }
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return to_route('login')->with('status', 'You are logged out');
    }
}
