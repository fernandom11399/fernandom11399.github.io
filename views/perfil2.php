<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/pruebatexto.css">
    <link rel="stylesheet" href="../css/home.css">
    <title>Document</title>
</head>
<body style="background-color:#f5f5f5">
<?php
    session_start();
    include "../templates/perfil_sidebar.php";
    

    $conexion->perfil();
    $query = "SELECT * FROM usuarios WHERE id_usuario = '{$_SESSION["id"]}'";
    $pro=$conexion->usr($query);
?>


<div style="margin: 3rem;" class="col-md-6 offset-lg-1 col-lg-8">
        <div>
        <?php
        foreach($pro as $re)
        {
           echo "<p>Usuario: $re->nombre_usuario</p>";
           echo "<p>Correo: $re->email_usuario</p>";
           echo "<p>Telefono: $re->telefono_usuario</p>";
           echo "<p>Sexo: $re->sexo_usuario</p>";
        }
        ?>
    </div>
<!--Fin de imagenes-->
<!--Fin del perfil-->
        </div>



<script
  src="https://code.jquery.com/jquery-3.7.0.js"
  integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
  crossorigin="anonymous"></script>
    <script src="../js/clock.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="../js/bootstrap.bundle.min.js"></script>
<script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>
</body>
</html>