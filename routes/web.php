<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\CatalogoController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Rutas públicas
Route::get('/', [CatalogoController::class, 'inicio'])->name('inicio');
Route::get('/peliculas', [CatalogoController::class, 'listado'])->name('listado');
Route::get('/registro', [CatalogoController::class, 'registro'])->name('registro');
Route::post('/registro/user', [RegistroController::class, 'registro'])->name('registro.controller');

// Autenticación
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::get('/registro', [RegistroController::class, 'showRegistrationForm'])->name('registro');
Route::post('/login', [LoginController::class, 'login'])->name('login.controller');
Route::post('/logout', function(){
    Auth::logout();
    return redirect('/login');

})->name('logout');

// Rutas protegidas por autenticación
Route::middleware(['auth'])->group(function () {
    // Gestión de películas
    Route::prefix('peliculas')->group(function () {
        Route::get('/agregar', [CatalogoController::class, 'agregar'])->name('agregar');
        Route::post('/guardar', [CatalogoController::class, 'guardar'])->name('guardar');
        Route::get('/editar/{id}', [CatalogoController::class, 'editar'])->name('editar');
        Route::post('/actualizar/{id}', [CatalogoController::class, 'actualizar'])->name('actualizar');
        Route::delete('/eliminar/{id}', [CatalogoController::class, 'eliminar'])->name('eliminar');
    });

    // Otras rutas protegidas
    Route::get('/inicio', function () {
        return view('inicio');
    })->name('inicio.auth'); // Para evitar conflicto con la ruta pública
});