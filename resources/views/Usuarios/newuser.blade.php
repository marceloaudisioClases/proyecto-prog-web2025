<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registro de Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
                                       <h1 class="text-center">Informacion de Usuario</h1>
    <div class="container  ">
      <div class="row">
        <div class="col-sm-4">
          <div class="card">
            <div class="card-body">
                <div class="text-center">
                    <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail"
                        alt="avatar">
                    <h6>Subir Foto...</h6>
                    <input type="file" class="text-center center-block file-upload">
                </div>
                </hr><br>
            </div>
          </div>
        </div>
                <div class="col-sm-8">
          <div class="card">
            <div class="card-body">
                    <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Usuario</span>
                    <input type="text" class="form-control" placeholder="Usuario" aria-label="Usuario" aria-describedby="basic-addon1">
                  </div>

                  <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon2">@ejemplo.com</span>
                    <input type="text" class="form-control" placeholder="Correo de Usuario" aria-label="Correo de Usuario" aria-describedby="basic-addon2">
                  </div>

                  <div class="input-group mb-3">
                    <span class="input-group-text">Estado</span>
                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                  </div>

                  <div class="input-group mb-3">
                    <span class="input-group-text">Fecha de Ingreso</span>
                    <input type="text" class="form-control" placeholder="" aria-label="">
                  </div>

                  <div class="input-group">
                    <span class="input-group-text">Ticket/Reclamo</span>
                    <textarea class="form-control" aria-label="With textarea"></textarea>
                  </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>