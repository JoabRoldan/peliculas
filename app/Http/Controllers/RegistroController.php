<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\ValidationException;

class RegistroController extends Controller
{
    
     public function showRegistrationForm(){
    if (Auth::check()) {
        return redirect()->route('inicio');
    }
    return view('registro', ["titulo" => "registro"]);
}
    
    
    public function registro(Request $request)
    {
        // Validación de los datos del formulario
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8',
            // Agrega aquí más campos si es necesario
        ], [
            'name.required' => 'El nombre es obligatorio',
            'email.required' => 'El correo electrónico es obligatorio',
            'email.email' => 'Debe ingresar un correo electrónico válido',
            'password.required' => 'La contraseña es obligatoria',
            'password.min' => 'La contraseña debe tener al menos 8 caracteres',
        ]);

        // Creación del usuario
        /* $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
        ]); */

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        if(!$user->save()){
            throw ValidationException::withMessages(["name"=>"Error en insersion"]);
        }
        
        // Redireccionar después del registro
        return redirect()->route('inicio')->with('success', '¡Registro exitoso!');
    }
}