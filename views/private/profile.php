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
      <h1>PERFIL</h1>
      <hr>
      <br>
      <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
        <img src="../../resources/img/user.png"class="img-fluid">
        <br>
        <br>
        <br>
        </div>
        <div class="col-sm-4"></div>
        

        <div class="col-sm-1">
        </div>
        <div class="col-sm-2">
        </div>
        <div class="col-sm-6">
        <div class="card">
		        <div class="card-body">
		            <div class="row">
		                <div class="col-md-12">
		                    <form>
                              <div class="form-group row">
                                <label for="username" class="col-6 col-form-label text-center">NOMBRES:</label> 
                                <label for="username" class="col-6 col-form-label text-center">Gerardo Javier</label>
                              </div>
                              <hr>
                              <div class="form-group row">
                                <label for="username" class="col-6 col-form-label text-center">APELLIDOS:</label> 
                                <label for="username" class="col-6 col-form-label text-center">Ramírez Gómez</label>
                              </div>
                              <hr>
                              <div class="form-group row">
                                <label for="username" class="col-6 col-form-label text-center">NOMBRE DE <br> USUARIO:</label> 
                                <label for="username" class="col-6 col-form-label text-center">Admin</label>
                              </div>
                              <hr>
                              <div class="form-group row">
                                <label for="username" class="col-6 col-form-label text-center">CONTRASEÑA:</label> 
                                <label for="username" class="col-6 col-form-label text-center">********</label>
                              </div>
                              <hr>
                              <div class="form-group row">
                              <div class="col-sm-3">
                                </div>
                                <div class="col-sm-6">
                                  <button name="submit" type="submit" class="btn btn-primary btn-block" >EDITAR</button>
                                </div>
                                <div class="col-sm-3">
                                </div>
                              </div>
                            </form>
		                </div>
		            </div>
		            
		        </div>
		    </div>
		</div>
	</div>
        </div>
        <div class="col-sm-2">
        </div>
        <div class="col-sm-1">
        </div>
        </div>
    </div>
</div>

    <script src="../../resources/js/bootstrap.min.js"></script>
    <script src="../../resources/js/jquery-3.3.1.min.js"></script>
    <script src="../../resources/js/style.js"></script>
    <script src="../../resources/js/all.js"></script>
    
</body>
</html>