<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;

class TicketController extends Controller
{
    public function create()
    {
        return view('tickets.create');
    }

    public function store(Request $request)
    {
        // Validación
        $request->validate([
            'titulo' => 'required',
            'descripcion' => 'required',
            'estado' => 'required',
        ]);

        // Guardar ticket
        Ticket::create([
            'titulo' => $request->titulo,
            'descripcion' => $request->descripcion,
            'estado' => $request->estado,
        ]);

        // Mensaje de éxito
        return redirect()
            ->route('tickets.create')
            ->with('success', 'Ticket creado correctamente.');
    }
}
