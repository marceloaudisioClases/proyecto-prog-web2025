@extends("layouts.app")

@section("title",config("app.name"))

@section("content")

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="m-3">
                    <a href="{{ route('tickets.create') }}" class="btn btn-primary"><i class="bi bi-plus-lg"></i>Nuevo ticket</a>
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
                                <th scope="col">Cod.Ticket</th>
                                <th scope="col">Titulo</th>
                                <th scope="col">Fecha de alta</th>
                                <th scope="col">Estado</th>
                                <th scope="col">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <th>ABC132</th>
                                <td>Agregar rutas web.</td>
                                <td>02/12/2025</td>
                                <td>
                                    <span class="badge text-bg-warning">Pendiente</span>
                                </td>
                                <td>
                                    <a href="{{ route('ticket.editar') }}" class="btn btn-primary btn-sm">Editar</a>
                                </td>
                                </tr>
                                                        <tr>
                                <th>ABC132</th>
                                <td>Agregar rutas web.</td>
                                <td>02/12/2025</td>
                                <td>
                                    <span class="badge text-bg-warning">Pendiente</span>
                                </td>
                                <td>
                                    <a href="{{ route('ticket.editar') }}" class="btn btn-primary btn-sm">Editar</a>
                                </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection