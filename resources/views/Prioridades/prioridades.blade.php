@extends("layouts.app")

@section("title",config("app.name"))

@section("content")

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-3">
            <div class="card m-3">
                <div class="card-body">
                    <form action="{{ route("prioridades.nueva") }}" method="POST">
                        @csrf
                        <h2>Agregar una nueva prioridad.</h2>
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre.</label>
                            <input type="text" name="nombre" id="nombre" class="form-control">
                        </div>
                        <button type="submit"class="btn btn-primary">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Accion</th>
                            </tr>
                        </thead>
                        <tbody>
                           
                            @foreach ($prioridades as $p )
                            @if (($p->id == 1) or ($p->id == 2) or ($p->id == 3))
                                <tr>
                                    <th scope="row">{{ $p->id }}</th>
                                    <td>{{ $p->nombre }}</td>
                                    <td>X</td>
                                </tr>
                            @else
                            <tr>
                                <th scope="row">{{ $p->id }}</th>
                                <td>{{ $p->nombre }}</td>
                                <td><button class="btn btn-primary">Editar</button></td>
                            </tr>    
                            @endif

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection