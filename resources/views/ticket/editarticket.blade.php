<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-6">
                <div class="card shadow">
                    <div class="card-body">
                        <h3 class="display-6">Editar Ticket</h3>
                        <form action="" method="post">
                            <div class="mb-3">
                                <label for="codigo" name="codigo" id="codigo" class="form-label">Codigo:</label>
                                <input type="text" name="codigo" id="codigo"  class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="titulo" name="titulo" id="titulo" class="form-label">Titulo:</label>
                                <input type="text" name="titulo" id="titulo"  class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="descripcion" name="descripcion" id="descripcion" class="form-label">Descripcion:</label>
                                <textarea name="descripcion" id="descripcion"  class="form-control">
                            </div> 
                            <div class="mb-3">
                                <select class="form-select" name="prioridad" id="prioridad">
                                    <option value="">Alta</option>
                                    <option value="">Normal</option>
                                    <option value="">Baja</option>
                                </select>
                            </div>   
                            <div class="mb-3">
                                <select class="form-select" name="categoria" id="categoria">
                                    <option value="">*</option>
                                    <option value="">*</option>
                                    <option value="">*</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="estado">Estado:</label>
                                <select class="form-select" name="estado" id="estado">
                                    <option value="">Pendiente</option>
                                    <option value="">Finalizado</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Guardar</button>                   
                        </form>
                        <button class="btn btn-primary">Registrar Solucion</button>                           
                    </div>                    
                </div>            
            </div>
            <div class="col">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>John</td>
                            <td>Doe</td>
                            <td>@social</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>