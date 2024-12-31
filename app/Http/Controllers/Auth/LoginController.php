<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password'); // Obtiene las credenciales del formulario

        if (Auth::attempt($credentials)) { // Intenta autenticar al usuario
            $request->session()->regenerate(); // Regenera la sesión por seguridad
            return redirect('/dashboard'); // Redirige al usuario a la página principal o a la que intentaba acceder antes del login
        }

        return back()->withErrors([ // Si la autenticación falla, regresa al formulario con errores
            'email' => 'Las credenciales proporcionadas no coinciden con nuestros registros.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
