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

  
  <!-- Page content -->
  <div class="content">
      <h1>PEDIDOS</h1>
      <hr>
      <br>
      
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
                        <div class="card strpied-tabled-with-hover">
                                <div class="card-header ">
                                    
                                    <p class="card-category">Pedidos realizados en la ultima semana</p>
                                </div>
                                <div class="card-body table-full-width table-responsive" id="myTable">
                                    <table class="table table-hover table-striped">
                                        <thead>
                                            <tr><th>Código</th>
                                            <th>Usuario</th>
                                            <th>Productos</th>
                                            <th>Total</th>
                                            <th>Estado</th>
                                        </tr></thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Dakota Rice</td>
                                                <td>FocusView Pro</td>
                                                <td>$150.00</td>
                                                <td>En Proceso</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Minerva Hooper</td>
                                                <td>FocusView Hoth</td>
                                                <td>$200.00</td>
                                                <td>En Proceso</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Sage Rodriguez</td>
                                                <td>Kit FocusView Ultra</td>
                                                <td>$350.00</td>
                                                <td>Entregado</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Philip Chaney</td>
                                                <td>FocusView XPro</td>
                                                <td>$250.00</td>
                                                <td>Cancelado</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    
                                </div>
                            </div>
                    </div>
                            <div class="col-md-3"></div>
                            <div class="col-md-3"> 
                                <button type="button" class="btn btn-wd btn-info btn-round btn-block">
                                <span class="btn-label">
                                <i class="fa fa-pen"></i>
                                </span>Cambiar Estado
                                </button>
                                </div>
                            <div class="col-md-3">
                            <button type="button" class="btn btn-wd btn-danger btn-round btn-block">
                                <span class="btn-label">
                                <i class="fa fa-times"></i>
                                </span>
                                Cancelar
                                </button>
                            </div>
                            <div class="col-md-3"></div>
                </div>
            </div>      
  </div>

    <script src="../../resources/js/bootstrap.min.js"></script>
    <script src="../../resources/js/jquery-3.3.1.min.js"></script>
    <script src="../../resources/js/style.js"></script>
    <script src="../../resources/js/all.js"></script>
</body>
</html>

