<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class RegisteredUserController extends Controller
{
    public function store(Request $request)
    {
        /* unique:users es que sea único en la tabla users, que la crea siempre Laravel*/
        /* 'confirmed' hace que chequee si password y password_confirmation son iguales */
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],

        ]);
        /* Importo y uso la clase de Laravel para eso */
        $user = User::create([
            'name' => $request->input('name'), /*esto es lo mismo que ->name*/
            'email' => $request->email,
            'password' => bcrypt($request->password), /*la debo encriptar, es lo mismo que hash:make*/
        ]);
        /* Auth::login($user); /*lo puedo loguear automáticamente*, para eso debo poner el $user = arriba al guardarlo*/
        return to_route('login')->with('status', 'Account created');
    }
}
