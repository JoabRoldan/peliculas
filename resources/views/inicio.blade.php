@extends('layout')

@section('titulo', 'Inicio')

@section('contenido')
    <div class="container-fluid py-5" style="min-height: 100vh; background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);">
        <!-- Hero Section -->
        <div class="row justify-content-center align-items-center mb-5">
            <div class="col-lg-8 col-md-10 p-5 bg-white rounded-4 shadow-lg text-center position-relative overflow-hidden">
                <!-- Efecto de decoración -->
                <div class="position-absolute top-0 end-0 bg-primary opacity-10" style="width: 300px; height: 300px; border-radius: 50%; transform: translate(150px, -150px);"></div>
                <div class="position-absolute bottom-0 start-0 bg-danger opacity-10" style="width: 200px; height: 200px; border-radius: 50%; transform: translate(-100px, 100px);"></div>
                
                <h1 class="mb-4 display-4 fw-bold text-dark" style="position: relative;">
                    🎬 El Cine más <span class="text-primary" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.1);">Capito</span>
                </h1>
                <p class="lead text-muted mb-4 fs-5">
                    Sumérgete en un universo de historias fascinantes. Administra tus películas favoritas, descubre clásicos inolvidables y mantente al día con las últimas novedades del séptimo arte.
                </p>
                <div class="d-flex flex-column flex-md-row justify-content-center gap-3 mt-4">
                    <a href="{{ route('agregar') }}" class="btn btn-primary btn-lg px-4 rounded-pill shadow-sm fw-bold">
                        📚 Agregar una Película 
                    </a>
                    <a href="{{ route('agregar') }}" class="btn btn-success btn-lg px-4 rounded-pill shadow-sm fw-bold">
                        ➕ Añadir Nueva Película
                    </a>
                </div>
            </div>
        </div>

        <!-- Películas Destacadas -->
        <div class="row justify-content-center mt-5">
            <div class="col-12 text-center mb-4">
                <h2 class="fw-bold display-5">🎞️ Películas Destacadas</h2>
                <p class="text-muted">Descubre nuestras joyas cinematográficas</p>
            </div>
            
            <div class="col-lg-10">
                <div class="row g-4">
                    <!-- Película 1 -->
                    <div class="col-md-4">
                        <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden hover-scale">
                            <div class="position-relative">
                                <img src="https://m.media-amazon.com/images/M/MV5BMDFkYTc0MGEtZmNhMC00ZDIzLWFmNTEtODM1ZmRlYWMwMWFmXkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_.jpg" class="card-img-top" alt="El Padrino" style="height: 400px; object-fit: cover;">
                                <div class="position-absolute bottom-0 start-0 bg-dark bg-opacity-75 text-white p-3 w-100">
                                    <h5 class="mb-0">El Padrino</h5>
                                    <small>1972 • Drama</small>
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="card-text text-muted">La saga de la familia Corleone, líderes de una poderosa organización criminal.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="badge bg-warning text-dark">⭐ 9.2/10</span>
                                    <a href="#" class="btn btn-sm btn-outline-primary">Ver detalles</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Película 2 -->
                    <div class="col-md-4">
                        <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden hover-scale">
                            <div class="position-relative">
                                <img src="https://m.media-amazon.com/images/M/MV5BMTMxNTMwODM0NF5BMl5BanBnXkFtZTcwODAyMTk2Mw@@._V1_.jpg" class="card-img-top" alt="El Caballero Oscuro" style="height: 400px; object-fit: cover;">
                                <div class="position-absolute bottom-0 start-0 bg-dark bg-opacity-75 text-white p-3 w-100">
                                    <h5 class="mb-0">El Caballero Oscuro</h5>
                                    <small>2008 • Acción</small>
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="card-text text-muted">Batman se enfrenta al Joker en una batalla por el alma de Gotham City.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="badge bg-warning text-dark">⭐ 9.0/10</span>
                                    <a href="#" class="btn btn-sm btn-outline-primary">Ver detalles</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Película 3 -->
                    <div class="col-md-4">
                        <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden hover-scale">
                            <div class="position-relative">
                                <img src="https://m.media-amazon.com/images/M/MV5BM2MyNjYxNmUtYTAwNi00MTYxLWJmNWYtYzZlODY3ZTk3OTFlXkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_.jpg" class="card-img-top" alt="El Padrino II" style="height: 400px; object-fit: cover;">
                                <div class="position-absolute bottom-0 start-0 bg-dark bg-opacity-75 text-white p-3 w-100">
                                    <h5 class="mb-0">El Padrino II</h5>
                                    <small>1974 • Drama</small>
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="card-text text-muted">La historia paralela del joven Vito Corleone y su hijo Michael en los años 50.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="badge bg-warning text-dark">⭐ 9.0/10</span>
                                    <a href="#" class="btn btn-sm btn-outline-primary">Ver detalles</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Más películas (sección secundaria) -->
        <div class="row justify-content-center mt-5">
            <div class="col-lg-10">
                <div class="bg-white p-4 rounded-4 shadow-sm">
                    <h3 class="fw-bold mb-4">🎥 Próximos Estrenos</h3>
                    <div class="row g-3">
                        @foreach([
                            ['title' => 'Dune: Parte Dos', 'year' => 2024, 'genre' => 'Ciencia Ficción', 'rating' => 8.8],
                            ['title' => 'Oppenheimer', 'year' => 2023, 'genre' => 'Histórico', 'rating' => 8.6],
                            ['title' => 'Los asesinos de la luna', 'year' => 2023, 'genre' => 'Crimen', 'rating' => 7.8],
                            ['title' => 'Barbie', 'year' => 2023, 'genre' => 'Comedia', 'rating' => 7.3],
                            ['title' => 'Poor Things', 'year' => 2023, 'genre' => 'Drama', 'rating' => 8.4],
                            ['title' => 'Killers of the Flower Moon', 'year' => 2023, 'genre' => 'Drama', 'rating' => 7.7]
                        ] as $movie)
                        <div class="col-md-6 col-lg-4">
                            <div class="d-flex align-items-center p-3 bg-light rounded-3 hover-bg">
                                <div class="flex-shrink-0 me-3">
                                    <div class="bg-primary bg-opacity-10 text-primary rounded-2 p-2" style="width: 50px; height: 50px; display: grid; place-items: center;">
                                        🎬
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-0 fw-bold">{{ $movie['title'] }}</h6>
                                    <small class="text-muted">{{ $movie['year'] }} • {{ $movie['genre'] }}</small>
                                </div>
                                <span class="badge bg-warning text-dark ms-2">{{ $movie['rating'] }}/10</span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .hover-scale {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .hover-scale:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important;
        }
        .hover-bg {
            transition: background-color 0.3s ease;
        }
        .hover-bg:hover {
            background-color: rgba(13, 110, 253, 0.1) !important;
        }
    </style>
@endsection