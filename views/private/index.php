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
    <script src="../../resources/js/chart.bundle.js"></script>
    
</head>
<body>

<!-- Sidebar -->

<?php
    require "../../core/models/sidebar.php";
    sitepack::menu();
?>

  
  <!-- Page content -->
  <div class="content">
      <!-- Grafico de inicio -->
      <h1>BIENVENIDO</h1>
      <hr>
      <br>
      <canvas id="myChart" width="350" height="150"></canvas>
          <script>
          var ctx = document.getElementById("myChart").getContext('2d');
          var myChart = new Chart(ctx, {
              type: 'line',
              data: {
                  labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
                  datasets: [{
                      label: 'VENTAS DEL DÍA',
                      data: [12, 19, 3, 5, 2, 3],
                      backgroundColor: [
                          'rgba(86, 240, 106, 0.4)'
                      ],
                      borderColor: [
                          'rgba(18,215,45,1)'
                      ],
                      borderWidth: 2
                  }]
              },
              options: {
                  scales: {
                      yAxes: [{
                          ticks: {
                              beginAtZero:true
                          }
                      }]
                  }
              }
          });
          </script>
          <br>
          <hr>
          <h1>RESUMEN</h1>
          <br>
          <!-- Botones -->
          <div class="container">
          <div class="row">
              <div class="col-lg-3 col-sm-7">
                <div class="circle-tile ">
                  <a href="#"><div class="circle-tile-heading dark-blue"><i class="fa fa-users fa-fw fa-3x"></i></div></a>
                  <div class="circle-tile-content dark-blue">
                    <div class="circle-tile-description text-faded"> Usuarios Online</div>
                    <div class="circle-tile-number text-faded ">265</div>
                    <a class="circle-tile-footer" href="usuarios.php">More Info<i class="fa fa-chevron-circle-right"></i></a>
                  </div>
                </div>
              </div>
              
              <div class="col-lg-3 col-sm-7">
                <div class="circle-tile ">
                  <a href="#"><div class="circle-tile-heading red"><i class="fa fa-camera fa-fw fa-3x"></i></div></a>
                  <div class="circle-tile-content red">
                    <div class="circle-tile-description text-faded"> Productos </div>
                    <div class="circle-tile-number text-faded ">10</div>
                    <a class="circle-tile-footer" href="productos.php">More Info<i class="fa fa-chevron-circle-right"></i></a>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-sm-7">
                  <div class="circle-tile ">
                    <a href="#"><div class="circle-tile-heading green"><i class="fa fa-list fa-fw fa-3x"></i></div></a>
                    <div class="circle-tile-content green">
                      <div class="circle-tile-description text-faded"> Categorías </div>
                      <div class="circle-tile-number text-faded ">10</div>
                      <a class="circle-tile-footer" href="categorias.php">More Info<i class="fa fa-chevron-circle-right"></i></a>
                    </div>
                  </div>
                </div>
                
                <div class="col-lg-3 col-sm-7">
                    <div class="circle-tile ">
                      <a href="#"><div class="circle-tile-heading orange"><i class="fa fa-shopping-cart fa-fw fa-3x"></i></div></a>
                      
                      <div class="circle-tile-content orange">
                        <div class="circle-tile-description text-faded"> Pedidos </div>
                        <div class="circle-tile-number text-faded ">10</div>
                        <a class="circle-tile-footer" href="pedidos.php">More Info<i class="fa fa-chevron-circle-right"></i></a>
                      </div>
                    </div>
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