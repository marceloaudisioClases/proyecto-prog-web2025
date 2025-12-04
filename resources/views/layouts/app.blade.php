<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="m-3">
                    <a href="" class="btn btn-primary"><i class="bi bi-plus-lg"></i>Nuevo ticket</a>
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
                                    <button class="btn btn-primary">Editar</button>
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
                                    <button class="btn btn-primary">Editar</button>
                                </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>