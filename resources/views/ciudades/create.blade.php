@extends('layouts.app')

@section('content')
<div class="container mt-4">

    <h1 class="mb-4">Agregar Ciudad</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $e)
                    <li>{{ $e }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('ciudades.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" name="nombre" class="form-control"
                   value="{{ old('nombre') }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Habitantes</label>
            <input type="number" name="habitantes" class="form-control"
                   value="{{ old('habitantes') }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Provincia</label>
            <input type="text" name="provincia" class="form-control"
                   value="{{ old('provincia') }}">
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{ route('ciudades.index') }}" class="btn btn-secondary">Volver</a>

    </form>

</div>
@endsection
