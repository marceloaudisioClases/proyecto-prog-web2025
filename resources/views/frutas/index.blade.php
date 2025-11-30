 <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Frutas</title>
</head>
<body>
    <h2>Selecciona tu fruta favorita 🍎🍌🍇</h2>

    <form method="POST" action="{{ route('frutas.store') }}">
        @csrf
        <label for="fruta">Fruta:</label>
        <select name="fruta" id="fruta">
            @foreach($frutas as $f)
                <option value="{{ $f }}">{{ $f }}</option>
            @endforeach
        </select>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
