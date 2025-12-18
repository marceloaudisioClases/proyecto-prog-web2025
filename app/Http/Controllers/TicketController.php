<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;

class TicketController extends Controller
{
    public function index()
    {
        $tickets = Ticket::with('Prioridad')->get();
        return view('tickets.index', compact('tickets'));
    }

    public function create()
    {
        return view('tickets.create');
    }

    public function store(Request $request)
    {
        // Validación mejorada
        $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'estado' => 'boolean',
            'prioridad_id' => 'required|exists:prioridades,id',
        ]);

        // Guardar ticket
        Ticket::create([
            'titulo' => $request->titulo,
            'descripcion' => $request->descripcion,
            'estado' => $request->estado,
            'prioridad_id' => $request->prioridad_id,
        ]);

        // Mensaje de éxito y redirect a listado (asumiendo ruta tickets.index existe)
        return redirect()
            ->route('tickets.index')
            ->with('success', 'Ticket creado correctamente.');
    }

    public function verificar(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'ticket_id' => 'required|integer|exists:tickets,id',
            ]);

            $ticket = Ticket::find($request->ticket_id);
            $ticket->estado = 'verificado'; // Asumiendo que 'verificado' es un estado válido
            $ticket->save();

            return redirect()->route('verificacion')->with('success', 'Ticket verificado exitosamente.');
        }

        return view('verificacion'); // Crea una vista en resources/views/verificacion.blade.php si no existe
    }
}
