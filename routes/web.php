<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/registro', function () {
    return view('registro');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/pagina', function () {
    return view('pagina');
});
