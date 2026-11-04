<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\ProductoController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/roster', [PersonajeController::class, 'index']);

Route::Resource('/reserva', ReservaController::class);

Route::Resource('/Producto', ProductoController::class);

