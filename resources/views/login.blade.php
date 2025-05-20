@extends('layout')

@section('contenido')
<div class="container-fluid py-5" style="background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%); min-height: 100vh;">
    <div class="row justify-content-center align-items-center h-100">
        <div class="col-md-5 col-lg-4">
            <div class="card border-0 shadow-lg rounded-4 overflow-hidden">
                <!-- Encabezado con degradado -->
                <div class="card-header bg-primary bg-gradient py-4">
                    <h2 class="text-white text-center mb-0">
                        <i class="bi bi-box-arrow-in-right me-2"></i>Iniciar Sesión
                    </h2>
                </div>
                
                <div class="card-body p-4">
                    <form action="{{ route('login.controller') }}" method="post">
                        @csrf
                        
                        <!-- Logo o imagen opcional -->
                        <div class="text-center mb-4">
                            <img src="https://cdn-icons-png.flaticon.com/512/3652/3652191.png" alt="Login" style="width: 80px; height: auto;">
                        </div>
                        
                        <!-- Campo Email -->
                        <div class="mb-4">
                            <label for="email" class="form-label fw-bold text-secondary">
                                <i class="bi bi-envelope-fill me-2"></i>Correo Electrónico
                            </label>
                            <input type="email" name="email" class="form-control form-control-lg py-2 @error('email') is-invalid @enderror" 
                                   placeholder="tucorreo@ejemplo.com" id="email">
                            @error('email')
                            <div class="invalid-feedback d-block">
                                <i class="bi bi-exclamation-circle-fill"></i> {{ $message }}
                            </div>
                            @enderror
                        </div>
                        
                        <!-- Campo Contraseña -->
                        <div class="mb-4">
                            <label for="password" class="form-label fw-bold text-secondary">
                                <i class="bi bi-lock-fill me-2"></i>Contraseña
                            </label>
                            <div class="input-group">
                                <input type="password" name="password" class="form-control form-control-lg py-2 @error('password') is-invalid @enderror" 
                                       placeholder="••••••••" id="password">
                                <button class="btn btn-outline-secondary toggle-password" type="button">
                                    <i class="bi bi-eye-fill"></i>
                                </button>
                            </div>
                            @error('password')
                            <div class="invalid-feedback d-block">
                                <i class="bi bi-exclamation-circle-fill"></i> {{ $message }}
                            </div>
                            @enderror
                        </div>
                        
                        <!-- Recordar contraseña -->
                        <div class="mb-4 form-check">
                            <input type="checkbox" class="form-check-input" id="remember">
                            <label class="form-check-label text-muted" for="remember">Recordar mi sesión</label>
                        </div>
                        
                        <!-- Botón de envío -->
                        <div class="d-grid mb-3">
                            <button type="submit" class="btn btn-primary btn-lg py-2 fw-bold rounded-pill shadow-sm">
                                <i class="bi bi-box-arrow-in-right me-2"></i>Iniciar Sesión
                            </button>
                        </div>
                        
                    
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Estilos adicionales -->
<style>
    .toggle-password:hover {
        background-color: #e9ecef;
    }
    .form-control-lg {
        border-radius: 0.5rem !important;
    }
    .card {
        transition: transform 0.3s ease;
    }
    .card:hover {
        transform: translateY(-5px);
    }
    .rounded-4 {
        border-radius: 1rem !important;
    }
</style>

<!-- Script para mostrar/ocultar contraseña -->
<script>
    document.querySelector('.toggle-password').addEventListener('click', function() {
        const passwordInput = document.getElementById('password');
        const icon = this.querySelector('i');
        
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            icon.classList.remove('bi-eye-fill');
            icon.classList.add('bi-eye-slash-fill');
        } else {
            passwordInput.type = 'password';
            icon.classList.remove('bi-eye-slash-fill');
            icon.classList.add('bi-eye-fill');
        }
    });
</script>
@endsection