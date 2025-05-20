@extends('layout')
@section('contenido')
@section('contenido')
<link rel="stylesheet" href="{{ asset('css/main.css') }}">


    <div class="container">
        <div class="form-container">
            <h2>Registrate</h2>
            <form action="{{ route('registro.controller') }}" method="POST">
                @csrf
                @error('name')
                <p>{{ $message }}</p>
                @enderror
                <div class="mb-3">
                    <label class="form-label">Nombre:</label>
                    <input type="text" name="name" class="form-control">
                </div>
                @error('email')
                <p>{{ $message }}</p>
                @enderror
                <div class="mb-3">
                    <label class="form-label">Correo</label>
                    <textarea name="email" class="form-control"></textarea>
                </div>
                @error('password')
                <p>{{ $message }}</p>
                @enderror
                <div class="mb-3">
                    <label class="form-label">Contraseña</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Registrate</button>
                
            </form>
        </div>
    </div>
@endsection