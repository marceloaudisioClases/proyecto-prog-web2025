<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CiudadController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Aquí se registran las rutas para la aplicación web.
|
*/

// Ruta raíz: va directamente al formulario de creación de ciudades
Route::get('/', [CiudadController::class, 'create']);

// Rutas del CRUD de ciudades
Route::resource('ciudades', CiudadController::class);
