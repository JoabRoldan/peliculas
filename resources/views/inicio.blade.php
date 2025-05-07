@extends('layout')

@section('titulo', 'Inicio')

@section('contenido')
    <div class="container-fluid bg-gradient py-5" style="min-height: 100vh; background: linear-gradient(135deg, #f8f9fa, #e9ecef);">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-lg-8 col-md-10 p-5 bg-white rounded-4 shadow-lg text-center">
                <h1 class="mb-4 display-5 fw-bold text-dark">
                    🎬 El Cine más <span class="text-primary">Capito</span>
                </h1>
                <p class="lead text-muted mb-4">
                    Sumérgete en un universo de historias fascinantes. Administra tus películas favoritas, descubre clásicos inolvidables y mantente al día con las últimas novedades del séptimo arte.
                </p>
                <div class="d-flex flex-column flex-md-row justify-content-center gap-3 mt-4">
                    <a href="{{ route('listado') }}" class="btn btn-outline-primary btn-lg px-4 rounded-pill shadow-sm">
                        📚 Ver Catálogo
                    </a>
                    <a href="{{ route('agregar') }}" class="btn btn-outline-success btn-lg px-4 rounded-pill shadow-sm">
                        ➕ Añadir Película
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection

