<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registro de Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<h3 class="mb-3 text-center">{{ isset($user) ? 'Editar Usuario' : 'Nuevo Usuario' }}</h3>

			@if ($errors->any())
				<div class="alert alert-danger">
					<ul class="mb-0">
						@foreach ($errors->all() as $err)
							<li>{{ $err }}</li>
						@endforeach
					</ul>
				</div>
			@endif

			<form action="{{ isset($user) ? route('usuarios.update', $user->id) : route('usuarios.store') }}" method="post">
				@csrf
				@if(isset($user))
					@method('PUT')
				@endif

				<div class="mb-3">
					<label class="form-label">Nombre</label>
					<input type="text" name="name" class="form-control" value="{{ old('name', $user->name ?? '') }}" required>
				</div>

				<div class="mb-3">
					<label class="form-label">Email</label>
					<input type="email" name="email" class="form-control" value="{{ old('email', $user->email ?? '') }}" required>
				</div>

				<div class="mb-3">
					<label class="form-label">Contraseña {{ isset($user) ? '(dejar en blanco para no cambiar)' : '' }}</label>
					<input type="password" name="password" class="form-control" {{ isset($user) ? '' : 'required' }}>
				</div>

				<div class="mb-3">
					<label class="form-label">Estado</label>
					<input type="text" name="estado" class="form-control" value="{{ old('estado', $user->estado ?? '') }}">
				</div>

				<button class="btn btn-primary">{{ isset($user) ? 'Actualizar' : 'Crear' }}</button>
				<a href="{{ route('usuarios.index') }}" class="btn btn-secondary">Volver</a>
			</form>
		</div>
	</div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>