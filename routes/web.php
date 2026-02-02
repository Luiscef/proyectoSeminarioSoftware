<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// Ruta raíz redirige al login
Route::get('/', function () {
    return redirect()->route('login');
});

// Rutas PÚBLICAS (sin autenticación)
Route::get('/login', [AuthController::class, 'mostrarLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/registro', [AuthController::class, 'mostrarRegistro'])->name('register');
Route::post('/registro', [AuthController::class, 'registro']);

// Rutas PROTEGIDAS (requieren autenticación)
Route::middleware('auth')->group(function () {
    Route::get('/pagina', function () {
        return view('pagina');
    })->name('pagina');
    
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});