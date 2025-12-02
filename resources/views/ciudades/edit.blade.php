@extends('layouts.app')

@section('content')
<div class="container mt-4">

    <h1 class="mb-4">Editar Ciudad</h1>

    <form action="{{ route('ciudades.update', $ciudad->id) }}" method="POST">
        @csrf
        @method('PATCH')

        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" name="nombre" class="form-control"
                   value="{{ $ciudad->nombre }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Habitantes</label>
            <input type="number" name="habitantes" class="form-control"
                   value="{{ $ciudad->habitantes }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Provincia</label>
            <input type="text" name="provincia" class="form-control"
                   value="{{ $ciudad->provincia }}">
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('ciudades.index') }}" class="btn btn-secondary">Volver</a>

    </form>

</div>
@endsection
