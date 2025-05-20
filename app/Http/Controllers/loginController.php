<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function showLoginForm(){
    if (Auth::check()) {
        return redirect()->route('inicio');
    }
    return view('login', ["titulo" => "Login"]);
    }

    // Procesar el login
    public function login(Request $request)
    {
        // Validación de campos
        $credentials = $request->validate([     
            'email' => 'required|email',
            'password' => 'required|min:6',
        ],["email.required"=>"El campo email es requerido"]);

        // Intentar autenticación
        if (Auth::attempt($credentials, $request->filled('remember'))) {
            $request->session()->regenerate();
            
            return redirect()->route('inicio'); // Redirige a ruta deseada
        }

        // Si falla la autenticación
        return back()->withErrors([
            'email' => 'Las credenciales proporcionadas no coinciden con nuestros registros.',
        ])->onlyInput('email');
    }

    // Cerrar sesión
    public function logout(Request $request)
    {
        Auth::logout();
        
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect('/login');
    }    

}

