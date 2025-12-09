<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\PrioridadesController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[AuthController::class,'login'])->name('login');
Route::get('/principal', function () {
    return view('principal');
})->name("principal");
Route::get('/verificacion', function () {
    return view('ticket.TicketVerificacion');
})->name("verificacion");

Route::get('/ticket/editarticket', function () {
    return view('ticket.editarticket');
})->name('ticket.editar');

Route::get('/tickets/nuevo', [TicketController::class, 'create'])->name('tickets.create');
Route::post('/tickets', [TicketController::class, 'store'])->name('tickets.store');

Route::get('/prioridades',[PrioridadesController::class,'prioridades'])->name('prioridades.edit');
Route::POST('/prioridades/crear',[PrioridadesController::class,'nuevaprioridad'])->name('prioridades.nueva');

