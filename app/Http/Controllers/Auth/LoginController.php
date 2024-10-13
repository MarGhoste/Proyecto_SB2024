<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    // Muestra el formulario de inicio de sesión
    public function showLoginForm()
    {
        return view('login'); // Asegúrate de que esta vista exista
    }

    // Maneja la solicitud de inicio de sesión
    public function login(Request $request)
    {
        // Validación de los campos del formulario
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // Encuentra al usuario en tu tabla personalizada
        $user = User::where('username', $request->username)->first();

        // Verifica la contraseña
        if ($user && password_verify($request->password, $user->contrasena)) {
            Auth::login($user);
            return redirect()->intended('/'); // Cambia esto a la ruta que desees después de iniciar sesión
        }

        // Si la autenticación falla, vuelve al formulario con un mensaje de error
        return back()->withErrors([
            'username' => 'Las credenciales no coinciden con nuestros registros.',
        ]);
    }

    // Opcional: Maneja el cierre de sesión
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/'); // Cambia esto a la ruta deseada
    }
}

