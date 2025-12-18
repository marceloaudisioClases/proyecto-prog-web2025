@extends("layouts.app")

@section("title",config("app.name"))

@section("content")

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h2>Todas las Prioridades</h2>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Estado</th>
                                <th scope="col">Fecha/hora</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($prioridades as $p)
                                <tr>
                                    <th scope="row">{{ $p->id }}</th>
                                    <td>{{ $p->nombre }}</td>
                                    <td>{{ $p->estado }}</td>
                                    <td>{{ $p->created_at }}</td>
                                    <td>
                                        @if(in_array($p->id, [1,2,3,4,5]))
                                           <td><button class="btn btn-primary">Editar</button></td>
                                        @else
                                            <button class="btn btn-primary btn-sm">Editar</button>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
