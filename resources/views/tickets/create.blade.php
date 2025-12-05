@extends('layouts.app')


@section('title', 'Nuevo Ticket')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-6 offset-3">
            <div class="card mt-4">
                <div class="card-body p-4">
                    <h2 class="mb-3">Nuevo Ticket</h2>

                    
                    @if(session('success'))
                        <div class="alert alert-success mb-3">{{ session('success') }}</div>
                    @endif

                    @if($errors->any())
                        <div class="alert alert-danger mb-3">
                            <ul class="mb-0">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('tickets.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="titulo" class="form-label">Título:</label>
                            <input type="text" class="form-control" id="titulo" name="titulo" value="{{ old('titulo') }}">
                        </div>

                        <div class="mb-3">
                            <label for="descripcion" class="form-label">Descripción:</label>
                            <textarea class="form-control" id="descripcion" name="descripcion" rows="3">{{ old('descripcion') }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label for="estado" class="form-label">Estado:</label>
                            <select class="form-select" id="estado" name="estado">
                                <option value="abierto" {{ old('estado') == 'abierto' ? 'selected' : '' }}>Abierto</option>
                                <option value="cerrado" {{ old('estado') == 'cerrado' ? 'selected' : '' }}>Cerrado</option>
                                <option value="pendiente" {{ old('estado') == 'pendiente' ? 'selected' : '' }}>Pendiente</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">Guardar</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
