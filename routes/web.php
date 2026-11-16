<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/roster', [PersonajeController::class, 'index']);

Route::Resource('/reserva', ReservaController::class);

Route::Resource('/producto', ProductoController::class);

Route::Resource('/usuario', UserController::class);