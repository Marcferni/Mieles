<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservaController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/roster', [PersonajeController::class, 'index']);

Route::Resource('/reserva', ReservaController::class);