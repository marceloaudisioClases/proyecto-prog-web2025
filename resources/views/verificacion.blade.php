<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Verificación de Ticket</title>
</head>
<body>
    <h1>Verificar Ticket</h1>
    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif
    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li style="color: red;">{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <form action="{{ route('verificacion') }}" method="POST">
        @csrf
        <label for="ticket_id">ID del Ticket:</label>
        <input type="number" name="ticket_id" id="ticket_id" required>
        <button type="submit">Verificar</button>
    </form>
</body>
</html>
