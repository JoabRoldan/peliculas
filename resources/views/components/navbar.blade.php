
<link rel="stylesheet" href="{{ asset('css/main.css') }}">
  

<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm py-3">
    <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-center fw-bold text-light" href="{{ route('inicio') }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 64 64" fill="none" class="me-2">
                <circle cx="32" cy="32" r="4" fill="#d9b84a"/>
                <path d="M32 4V12M32 52V60M4 32H12M52 32H60M45 45L50 50M18 18L14 14M45 18L50 14M18 45L14 50" stroke="#d9b84a" stroke-width="2" stroke-linecap="round"/>
            </svg>
            <span class="fs-4">Cine TEC </span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('inicio') ? 'active fw-semibold text-warning' : 'text-light' }}" href="{{ route('inicio') }}">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('agregar') ? 'active fw-semibold text-warning' : 'text-light' }}" href="{{ route('agregar') }}">🎬  Agregar Película</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('listado') ? 'active fw-semibold text-warning' : 'text-light' }}" href="{{ route('listado') }}">📚  Editar Película</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('login') ? 'active fw-semibold text-warning' : 'text-light' }}" href="{{ route('login') }}"> ➕ Iniciar Sesion</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('registro') ? 'active fw-semibold text-warning' : 'text-light' }}" href="{{ route('registro') }}">📚  Registrarte</a>
                </li>

                
            
                
            </ul>
        </div>
        @auth
        <div class="d-flex">
            <form method="post" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn btn-outline-danger">
                <i class="bi bi-box-arrow-rigth"></i> cerrar Sesion
                </button>
        </form>


        </div>
    @endauth



    </div>
</nav>
