<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/login', [AuthController::class, 'mostrarLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/registro', [AuthController::class, 'mostrarRegistro'])->name('register');
Route::post('/registro', [AuthController::class, 'registro']);


Route::middleware('auth')->group(function () {
    Route::get('/pagina', function () {
        return view('pagina');
    })->name('pagina');
    
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});