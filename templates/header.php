<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/home/logo.png" type="logo/png">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/home.css">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.20/dist/sweetalert2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/productos_gene.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fullcalendar/core@5.10.0/main.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@5.10.0/main.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fullcalendar/timegrid@5.10.0/main.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js'></script>
    <script>

      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
          locale:'es',
          initialView: 'dayGridMonth',

        });
        calendar.render();
      });

    </script>

<!--Cantidad de productos agregados al carrito-->
<?php 
if(isset($_SESSION['carrito'])){
  $carrito_mio=$_SESSION['carrito'];
}
if(isset ($_SESSION ['carrito'])){

  for($i=0;$i<=count ($carrito_mio)-1; $i++){
    if(isset ($carrito_mio[$i])){
      if($carrito_mio[$i]!=null){
        if(!isset ($carrito_mio['cantidad'])){
          $carrito_mio['cantidad']=0;
        }else{
          $carrito_mio['cantidad']= $carrito_mio['cantidad'];          ;
        }
        $total_cantidad=$carrito_mio['cantidad'];
        $total_cantidad ++;
        if(!isset($totalcantidad))
        {
          $totalcantidad='0';
        }else{
          $totalcantidad=$totalcantidad;
        }
        $totalcantidad+=$total_cantidad;
      }
    }
  }
}
if(!isset($totalcantidad)){
  $totalcantidad='';
}else{
  $totalcantidad=$totalcantidad;
}
?>
    <title>CAFÉ tacvuba</title>
</head>
<body>
    <!-- INICIO DE LA BARRA DE NAVEGACION -->
    <nav class="navbar navbar-expand-lg fixed-top" style="height: 6rem;">
    <div class="container">
      <!-- LOGO -->
      <!-- DURAAAANNNNNNNNNNNNNn -->
      <a class="navbar-brand logo fs-2 " href="../index.php">
        <img src="../img/home/logo.png" class="logooo">
        <span>CAFÉ </span>tacvba
      </a>
      <!-- Toggle btn-->
      <button class="navbar-toggler shadow-none border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Barra lateral -->
      <div class="offcanvas offcanvas-start border-bottom" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <!-- Barra lateral header -->
        <div class="offcanvas-header">
          <h5 class="offcanvas-title logo" id="offcanvasNavbarLabel"><span>CAFÉ </span>tacuva</h5>
          <button type="button" class="btn-close shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <!-- Barra lateral body -->
        <div class="offcanvas-body d-flex flex-column flex-lg-row">
          <ul class="navbar-nav justify-content-center flex-grow-0 pe-3 align-items-center fa-bars">
            <li class="nav-item mx-2">
              <a class="nav-link" href="../index.php">Inicio</a>
            </li><!-- 
            <li class="nav-item mx-2">
              <a class="nav-link" href="views/ver_producto_general.php">Productos</a>
            </li> -->
            <li class="nav-item mx-2">
              <a class="nav-link" href="nosotros.php">Nosotros</a>
            </li>
          </ul>

        </div>
      </div>
    </div>
  </nav>
      <!-- FIN DE LA BARRA DE NAVEGACION -->


      