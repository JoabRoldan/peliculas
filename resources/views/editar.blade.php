@extends('layout')

@section('titulo', 'Editar Película')

@section('contenido')
   <link rel="stylesheet" href="{{ asset('css/main.css') }}">
@if ($errors->any())
        <div class="alert alert-danger">
            <ul class="m-0 ps-3">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="form-container">
        <h2>Editar Película</h2>
        <form action="{{ route('actualizar', $pelicula->id) }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Título</label>
                <input type="text" name="titulo" value="{{ $pelicula->titulo }}" class="form-control" >
            </div>
            <div class="mb-3">
                <label class="form-label">Descripción</label>
                <textarea name="descripcion" class="form-control" >{{ $pelicula->descripcion }}</textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Género</label>
                <input type="text" name="genero" value="{{ $pelicula->genero }}" class="form-control" >
            </div>
            <div class="mb-3">
                <label class="form-label">Director</label>
                <input type="text" name="director" value="{{ $pelicula->director }}" class="form-control" >
            </div>
            <div class="mb-3">
                <label class="form-label">Fecha de Estreno</label>
                <input type="date" name="fecha_estreno" value="{{ $pelicula->fecha_estreno }}" class="form-control" >
            </div>
            <div class="text-center mt-3">
                <button type="submit" class="btn btn-primary me-2">💾 Actualizar</button>
                <a href="{{ route('listado') }}" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>
@endsection
