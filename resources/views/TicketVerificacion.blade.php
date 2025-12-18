<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Verificación de Ticket</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card mt-3">
                    <div class="card-header">
                        <h5>Verificación de Ticket</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('verificacion') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="ticket_id" class="form-label">ID del Ticket</label>
                                <input type="number" class="form-control" id="ticket_id" name="ticket_id" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Verificar</button>
                        </form>

                        @if(isset($ticket))
                            <hr>
                            <ul class="list-group">
                                <li class="list-group-item active" aria-current="true">Título: {{ $ticket->titulo }}</li>
                                <li class="list-group-item">Fecha: {{ $ticket->created_at->format('d/m/Y H:i') }}</li>
                                <li class="list-group-item">Descripción: {{ $ticket->descripcion }}</li>
                                <li class="list-group-item">Prioridad: {{ $ticket->Prioridad->nombre }}</li>
                                <li class="list-group-item">Estado: {{ $ticket->estado ? 'Activo' : 'Inactivo' }}</li>
                            </ul>
                        @elseif(isset($error))
                            <hr>
                            <div class="alert alert-danger">{{ $error }}</div>
                        @endif

                        <a href="{{ route('login') }}" class="btn btn-secondary mt-3">Volver al Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>