<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../../resources/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../resources/css/styledash.css">
    <link rel="stylesheet" href="../../resources/css/all.css">
    
</head>
<body>

<!-- Sidebar -->
<?php
    require "../../core/models/sidebar.php";
    sitepack::menu();
?>

  <!-- Content -->
  <div class="content">
      <h1>PRODUCTOS</h1>
      <hr>
      <br>
      <!-- Barra de busqueda -->
      <div class="search-box">
                <div class="row">
                    <div class="col-sm-12">
                        <input type="text" id="myInput" class="form-control" placeholder="Buscar">
                        <script>
                            $(document).ready(function () {
                                $("#myInput").on("keyup", function () {
                                    var value = $(this).val().toLowerCase();
                                    $("#myTable tr").filter(function () {
                                        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                                    });
                                });
                            });
                        </script>
                        <br>
                        <!-- Tabla donde se muestran las categorías -->
                        <div class="card strpied-tabled-with-hover">
                                <div class="card-header">  
                                    <p class="card-category">Productos</p>
                                </div>
                                <div class="card-body table-full-width table-responsive" id="myTable">
                                    <table class="table table-hover table-striped">
                                        <thead>
                                            <tr>
                                            <th>Código</th>
                                            <th>Nombre</th>
                                            <th>Imagen</th>
                                            <th>Categoría</th>
                                            <th>Descripción</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>FocusView Pro</td>
                                                <th></th>
                                                <td>Cámaras</td>
                                                <td>Cámara con ip68, sumergible a 10 metros de profundidad por 30 minutos. <br>
                                                La grabación de video es de 1080 p a 60 fps con estabilización estándar.</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>FocusView XPro</td>
                                                <th></th>
                                                <td>Cámaras</td>
                                                <td>Cámara con ip68, sumergible a 10 metros de profundidad por 30 minutos. <br>
                                                La grabación de video es de 4k p a 30 fps con estabilización estándar.</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>FocusView Ultimate</td>
                                                <th></th>
                                                <td>Paquetes</td>
                                                <td>Kit de FocusView Pro con un año de garantía.</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                    </div>
                            <!-- Botones -->
                            <div class="col-md-3"></div>
                            <!-- Botón Agregar -->
                            <div class="col-md-2">
                            <a href="#ventana1" class="btn btn-success btn-lg btn-block" data-toggle="modal">
                            <span class="btn-label">
                            <i class="fa fa-plus"></i>
                            </span>Agregar
                            </a>
                            <!-- Modal de Agregar -->
                            <div class="modal fade" id="ventana1">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">AGREGAR PRODUCTOS</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                <div class="row">
                                <div class="col-sm-1">
                                        <i class="fa fa-image"></i>
                                        </div>
                                        <div class="col-sm-11">
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                        </div>
                                        </div>
                                        </div>
                                        <div class="modal-body">
                                        <div class="row">
                                        <div class="col-sm-1">
                                        <i class="fa fa-hashtag"></i>
                                        </div>
                                        <div class="col-sm-11">
                                        <input placeholder="Código" class="form-control">
                                        </div>
                                        </div>
                                        </div>
                                        <div class="modal-body">
                                        <div class="row">
                                        <div class="col-sm-1">
                                        <i class="fa fa-list"></i>
                                        </div>
                                        <div class="col-sm-11">
                                        <input placeholder="Nombre" class="form-control">
                                        </div>
                                        </div>
                                        </div>
                                        <div class="modal-body">
                                        <div class="row">
                                        <div class="col-sm-1">
                                        <i class="fa fa-thumbtack"></i>
                                        </div>
                                        <div class="col-sm-11">
                                        <select class="form-control">
                                        <option>Cámara</option>
                                        <option>Accesorios</option>
                                        <option>Paquete</option>
                                        </select>
                                        </div>
                                        </div>
                                        </div>
                                        <div class="modal-body">
                                        <div class="row">
                                        <div class="col-sm-1">
                                        <i class="fa fa-file-alt"></i>
                                        </div>
                                        <div class="col-sm-11">
                                        <textarea placeholder="Descripción" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                        </div>
                                        </div>
                                        </div>
                                        
                                
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                    <button type="button" class="btn btn-primary">Aceptar</button>
                                </div>
                                </div>
                            </div>
                            </div>
                            </div>
                            <!-- ConBotón Modificar -->
                            <div class="col-md-2">
                            <a href="#ventana2" class="btn btn-info btn-lg btn-block" data-toggle="modal">
                            <span class="btn-label">
                            <i class="fa fa-pen"></i>
                            </span>Modificar
                            </a>
                            <!-- Modal de Modificar -->
                            <div class="modal fade" id="ventana2">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">MODIFICAR CATEGORÍA</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                <div class="row">
                                <div class="col-sm-1">
                                        <i class="fa fa-image"></i>
                                        </div>
                                        <div class="col-sm-11">
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                        </div>
                                        </div>
                                        </div>
                                        <div class="modal-body">
                                        <div class="row">
                                        <div class="col-sm-1">
                                        <i class="fa fa-hashtag"></i>
                                        </div>
                                        <div class="col-sm-11">
                                        <input placeholder="Código" class="form-control">
                                        </div>
                                        </div>
                                        </div>
                                        <div class="modal-body">
                                        <div class="row">
                                        <div class="col-sm-1">
                                        <i class="fa fa-list"></i>
                                        </div>
                                        <div class="col-sm-11">
                                        <input placeholder="Nombre" class="form-control">
                                        </div>
                                        </div>
                                        </div>
                                        <div class="modal-body">
                                        <div class="row">
                                        <div class="col-sm-1">
                                        <i class="fa fa-thumbtack"></i>
                                        </div>
                                        <div class="col-sm-11">
                                        <select class="form-control">
                                        <option>Cámara</option>
                                        <option>Accesorios</option>
                                        <option>Paquete</option>
                                        </select>
                                        </div>
                                        </div>
                                        </div>
                                        <div class="modal-body">
                                        <div class="row">
                                        <div class="col-sm-1">
                                        <i class="fa fa-file-alt"></i>
                                        </div>
                                        <div class="col-sm-11">
                                        <textarea placeholder="Descripción" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                        </div>
                                        </div>
                                        </div>
                                        
                                
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                    <button type="button" class="btn btn-primary">Aceptar</button>
                                </div>
                                </div>
                            </div>
                            </div>
                            </div>

                            <!-- Botón de Eliminar -->
                            <div class="col-md-2">
                            <a href="#ventana3" class="btn btn-danger btn-lg btn-block" data-toggle="modal">
                            <span class="btn-label">
                            <i class="fa fa-times"></i>
                            </span>Eliminar
                            </a>
                            <!-- Modal de Eliminar -->
                            <div class="modal fade" id="ventana3">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">ELIMINAR PRODUCTO</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <h6>¿Está seguro de que desea eliminar este producto?</h6>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                    <button type="button" class="btn btn-primary">Aceptar</button>
                                </div>
                                </div>
                            </div>
                            </div>
                            </div>
                            <div class="col-md-3"></div>
                    </div>
            </div>
  </div>

 
    <script src="../../resources/js/jquery-3.3.1.min.js"></script>
    <script src="../../resources/js/bootstrap.min.js"></script>
    <script src="../../resources/js/jquery-3.3.1.min.js"></script>
    <script src="../../resources/js/style.js"></script>
    <script src="../../resources/js/all.js"></script>
    
</body>
</html>