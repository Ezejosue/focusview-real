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
      <h1>REPORTES</h1>
      <hr>
      <br>   
          <div class="container">
          <div class="row">
            <div class="col-sm-12">
            <canvas id="chart1" width="350" height="150"></canvas>
                <script>
                var ctx = document.getElementById("chart1").getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
                        datasets: [{
                            label: 'VENTAS DEL MES',
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
            </div>
            

            <div class="col-sm-12">
            <br>
            <br>
            <br>
            <canvas id="chart2" width="350" height="150"></canvas>
                <script>
                var ctx = document.getElementById("chart2").getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: ["Producto 1", "Producto 2", "Producto 3", "Producto 4"],
                        datasets: [{
                            label: 'PRODUCTOS MÁS VENDIDOS',
                            
                            data: [12, 19, 3, 5],
                            backgroundColor: [
                                'rgba(224, 179, 68, 0.4)'
                            ],
                            borderColor: [
                                'rgba(224, 179, 68,1)'
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
            </div>
          </div>

          <div class="col-sm-12">
            <br>
            <br>
            <br>
            <canvas id="chart3" width="350" height="150"></canvas>
                <script>
                var ctx = document.getElementById("chart3").getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: ["Categoría 1", "Categoría 2", "Categoría 3", "Categoría 4"],
                        datasets: [{
                            label: 'PRODUCTOS POR CATEGORÍA',
                            data: [22, 18, 7, 5],
                            backgroundColor: [
                                'rgba(188, 67, 67, 0.4)'
                            ],
                            borderColor: [
                                'rgba(188, 67, 67,1)'
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
            </div>
          <br>
          <br>
          <div class="container">
          <h4>RESUMEN DEL MES</h4>
          <hr>
          <div class="row">
              <div class="col-lg-3 col-sm-7">
                <div class="circle-tile ">
                  <a><div class="circle-tile-heading dark-blue"><i class="fa fa-dollar-sign fa-fw fa-3x"></i></div></a>
                  <div class="circle-tile-content dark-blue">
                    <div class="circle-tile-description text-faded"> Ingresos Obtenidos</div>
                    <div class="circle-tile-number text-faded ">265</div>
                    </div>
                </div>
              </div>
              
              <div class="col-lg-3 col-sm-7">
                <div class="circle-tile ">
                  <a><div class="circle-tile-heading red"><i class="fa fa-user-plus fa-fw fa-3x"></i></div></a>
                  <div class="circle-tile-content red">
                    <div class="circle-tile-description text-faded"> Nuevos Usuarios </div>
                    <div class="circle-tile-number text-faded ">10</div>
                    </div>
                </div>
              </div>

              <div class="col-lg-3 col-sm-7">
                  <div class="circle-tile ">
                    <a><div class="circle-tile-heading green"><i class="fa fa-shopping-cart fa-fw fa-3x"></i></div></a>
                    <div class="circle-tile-content green">
                      <div class="circle-tile-description text-faded"> Pedidos Realizados </div>
                      <div class="circle-tile-number text-faded ">10</div>
                      </div>
                  </div>
                </div>
                
                <div class="col-lg-3 col-sm-7">
                    <div class="circle-tile ">
                      <a><div class="circle-tile-heading orange"><i class="fa fa-camera fa-fw fa-3x"></i></div></a>
                      
                      <div class="circle-tile-content orange">
                        <div class="circle-tile-description text-faded"> Productos Añadidos </div>
                        <div class="circle-tile-number text-faded ">10</div>
                        </div>
                    </div>
                  </div> 
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