<?php

namespace App\Http\Controllers;

use App\Models\Catalogo;
use Illuminate\Http\Request;

class CatalogoController extends Controller
{
    public function inicio() {
        return view('inicio');
    }
    public function login() {
        return view('login');
    }
    public function registro() {
        return view('registro');
    }

    public function listado() {
        $peliculas = Catalogo::all();
        return view('listado_peliculas', compact('peliculas'));
    }

    public function agregar() {
        return view('agregar');
    }

    public function guardar(Request $request) {
    $request->validate([
        'titulo'        => 'required|string|min:2|max:255',
        'descripcion'   => 'required|string|min:10',
        'genero'        => 'required|string|max:100|regex:/^[\pL\s]+$/u',
        'director'      => 'required|string|max:100|regex:/^[\pL\s]+$/u',
        'fecha_estreno' => 'required|date|before_or_equal:today',
    ], [
        // TÍTULO
        'titulo.required' => 'El campo Título es obligatorio.',
        'titulo.min'      => 'El título debe tener al menos :min caracteres.',
        'titulo.max'      => 'El título no puede tener más de :max caracteres.',

        // DESCRIPCIÓN
        'descripcion.required' => 'La descripción es obligatoria.',
        'descripcion.min'      => 'La descripción debe tener al menos :min caracteres.',

        // GÉNERO
        'genero.required' => 'El campo Género es obligatorio.',
        'genero.regex'    => 'El género solo debe contener letras y espacios.',

        // DIRECTOR
        'director.required' => 'El campo Director es obligatorio.',
        'director.regex'    => 'El nombre del director solo debe contener letras y espacios.',

        // FECHA DE ESTRENO
        'fecha_estreno.required'        => 'La fecha de estreno es obligatoria.',
        'fecha_estreno.date'            => 'La fecha de estreno debe ser válida.',
        'fecha_estreno.before_or_equal' => 'La fecha no puede ser futura.',
    ]);

    Catalogo::create([
        'Titulo'        => $request->input('titulo'),
        'Descripcion'   => $request->input('descripcion'),
        'Genero'        => $request->input('genero'),
        'Director'      => $request->input('director'),
        'fecha_estreno' => $request->input('fecha_estreno'),
    ]);

    return redirect()->route('Listado')->with('success', 'Película agregada exitosamente.');
}

    public function editar($id) {
        $pelicula = Catalogo::findOrFail($id);
        return view('editar', compact('pelicula'));
    }
    

    public function actualizar(Request $request, $id)
{
    $request->validate([
        'titulo' => 'required|string|max:255',
        'descripcion' => 'required|string',
        'genero' => 'required|string|max:255',
        'director' => 'required|string|max:255',
        'fecha_estreno' => 'required|date',
    ], [
        'titulo.required' => 'El título es obligatorio.',
        'descripcion.required' => 'La descripción es obligatoria.',
        'genero.required' => 'El género es obligatorio.',
        'director.required' => 'El director es obligatorio.',
        'fecha_estreno.required' => 'La fecha de estreno es obligatoria.',
        'fecha_estreno.date' => 'Debe ser una fecha válida.',
    ]);

    $pelicula = Catalogo::findOrFail($id);
    $pelicula->Titulo = $request->titulo;
    $pelicula->Descripcion = $request->descripcion;
    $pelicula->Genero = $request->genero;
    $pelicula->Director = $request->director;
    $pelicula->fecha_estreno = $request->fecha_estreno;
    $pelicula->save();

    return redirect()->route('listado')->with('success', 'Película actualizada correctamente.');
}
    public function eliminar($id)
{
    $pelicula = Catalogo::findOrFail($id);
    $pelicula->delete();
    return redirect()->route('listado')->with('mensaje', 'Película eliminada correctamente');
}

}
