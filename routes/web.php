<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\ReservaController;

=======
use App\Http\Controllers\ProductoController;
>>>>>>> cca3fc9 (8º_commit_7ª+Producto[Actualizacion])


Route::get('/', function () {
    return view('welcome');
});

<<<<<<< HEAD
Route::get('/roster', [PersonajeController::class, 'index']);

Route::Resource('/reserva', ReservaController::class);
=======
Route::Resource('/reserva', ReservaController::class);

Route::Resource('/Producto', ProductoController::class);
>>>>>>> cca3fc9 (8º_commit_7ª+Producto[Actualizacion])
