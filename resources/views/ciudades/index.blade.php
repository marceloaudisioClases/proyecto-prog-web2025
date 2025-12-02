@extends('layouts.app')

@section('content')
<div class="container mt-4">

    <h1 class="mb-4">Listado de Ciudades</h1>

    <a href="{{ route('ciudades.create') }}" class="btn btn-success mb-3">Agregar Ciudad</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Habitantes</th>
                <th>Provincia</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($ciudades as $c)
                <tr>
                    <td>{{ $c->id }}</td>
                    <td>{{ $c->nombre }}</td>
                    <td>{{ $c->habitantes }}</td>
                    <td>{{ $c->provincia }}</td>
                    <td>
                        <a href="{{ route('ciudades.edit', $c->id) }}" class="btn btn-warning btn-sm">Editar</a>

                        <form action="{{ route('ciudades.destroy', $c->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('¿Eliminar ciudad?')">Borrar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection
