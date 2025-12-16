@extends('layouts.app')

@section('title', 'Usuarios')

@section('content')
<div class="container">
	<div class="d-flex justify-content-between align-items-center mb-3">
		<h3>Usuarios</h3>
		<a href="{{ route('usuarios.create') }}" class="btn btn-success">Nuevo Usuario</a>
	</div>

	@if(session('success'))
		<div class="alert alert-success">{{ session('success') }}</div>
	@endif

	<table class="table table-bordered table-sm">
		<thead>
			<tr>
				<th>#</th>
				<th>Nombre</th>
				<th>Email</th>
				<th>Estado</th>
				<th>Acciones</th>
			</tr>
		</thead>
		<tbody>
			@foreach($users as $u)
			<tr>
				<td>{{ $u->id }}</td>
				<td>{{ $u->name }}</td>
				<td>{{ $u->email }}</td>
				<td>{{ $u->estado ?? '-' }}</td>
				<td>
					<a href="{{ route('usuarios.edit', $u->id) }}" class="btn btn-sm btn-primary">Editar</a>
					<form action="{{ route('usuarios.destroy', $u->id) }}" method="post" style="display:inline-block">
						@csrf
						@method('DELETE')
						<button class="btn btn-sm btn-danger" onclick="return confirm('Eliminar usuario?')">Eliminar</button>
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	<div class="d-flex justify-content-center">
		{{ $users->links() }}
	</div>
</div>
@endsection
