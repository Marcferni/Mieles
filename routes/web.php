<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\ProductoController;
<<<<<<< HEAD
use App\Http\Controllers\UserController;

=======

require __DIR__.'/auth.php';
>>>>>>> 81552240c58b75e0738f9d2a78515f9419a1a004

Route::get('/', function () {
    return view('welcome');
});

Route::get('/roster', [PersonajeController::class, 'index']);

Route::Resource('/reserva', ReservaController::class);

Route::Resource('/producto', ProductoController::class);

Route::Resource('/usuario', UserController::class);