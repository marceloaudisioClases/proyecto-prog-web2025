<?php

use App\Http\Controllers\TicketController;

Route::redirect('/', '/tickets/nuevo');

Route::get('/tickets/nuevo', [TicketController::class, 'create'])->name('tickets.create');
Route::post('/tickets', [TicketController::class, 'store'])->name('tickets.store');
