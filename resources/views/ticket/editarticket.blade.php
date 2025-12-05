@extends("layouts.app")

@section("title",config("app.name"))

@section("content")
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h1 class="display-6 text-center">Editar Ticket</h1>
                <div class="card shadow bg-light mb-3 mt-3">
                    <div class="card-body">                        
                        <form action="" method="post">
                            <div class="mb-3">
                                <label for="codigo" name="codigo" class="form-label">Codigo:</label>
                                <input type="text" name="codigo" id="codigo"  class="form-control form-control-sm">
                            </div>
                            <div class="mb-3">
                                <label for="titulo" name="titulo" class="form-label form-label">Titulo:</label>
                                <input type="text" name="titulo" id="titulo"  class="form-control form-control-sm">
                            </div>
                            <div class="mb-3">
                                <label for="descripcion" name="descripcion" class="form-label">Descripcion:</label>
                                <textarea name="descripcion" id="descripcion"  class="form-control form-control-sm"></textarea>
                            </div> 
                            <div class="mb-3">
                                <label for="prioridad" name="prioridad" class="form-label">Prioridad:</label>
                                <select class="form-select form-select-sm" name="prioridad" id="prioridad">
                                    <option value="">Alta</option>
                                    <option value="">Normal</option>
                                    <option value="">Baja</option>
                                </select>
                            </div>   
                            <div class="mb-3">
                                <label for="categoria" name="categoria" class="form-label">Categoria:</label>
                                <select class="form-select form-select-sm" name="categoria" id="categoria">
                                    <option value="">*1</option>
                                    <option value="">*2</option>
                                    <option value="">*3</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="estado" name="estado" class="form-label">Estado:</label>
                                <select class="form-select form-select-sm" name="estado" id="estado">
                                    <option value="">Pendiente</option>
                                    <option value="">Finalizado</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm mb-3">Guardar</button>                   
                        </form>
                        <form action="" method="post">
                            <div class="mb-3">
                                <label for="solucion" name="solucion" class="form-label">Solución:</label>
                                <input type="text" class="form-control form-control-sm" name="solucion" id="solucion" >
                            </div>                           
                            <button class="btn btn-primary btn-sm">Registrar Solucion</button> 
                        </form>                                                  
                    </div>                    
                </div>            
            </div>
            <div class="col-md-8 offset-md-2">
                <div class="table-responsive">
                    <table class="table table-bordered table-light table-sm">
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
    </div>
@endsection