<?php
session_start();
$citas = false;
$ordenes = false;
$perfil = false;

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="img/home/logo.png" type="logo/png">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/home.css">
  <link rel="stylesheet" href="css/productos_gene.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">



  <title>CAFÉ tacvba</title>
</head>

<body>
  <!-- INICIO DE LA BARRA DE NAVEGACION -->
  <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
      <!-- LOGO -->
      <!-- DURAAAANNNNNNNNNNNNNn -->
      <a class="navbar-brand logo fs-2 " href="index.php">
        <img src="img/home/logo.png" class="logooo">
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
          <h5 class="offcanvas-title logo" id="offcanvasNavbarLabel"><span>CAFÉ </span>tacvba</h5>
          <button type="button" class="btn-close shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <!-- Barra lateral body -->
        <div class="offcanvas-body d-flex flex-column flex-lg-row">
          <ul class="navbar-nav justify-content-center flex-grow-0 pe-3 align-items-center fa-bars">
            <li class="nav-item mx-2">
              <a class="nav-link" href="index.php">Inicio</a>
            </li><!-- 
            <li class="nav-item mx-2">
              <a class="nav-link" href="views/ver_producto_general.php">Productos</a>
            </li> -->
            <li class="nav-item mx-2">
              <a class="nav-link" href="views/nosotros.php">Nosotros</a>
            </li>
          </ul>

        </div>
      </div>
    </div>
  </nav>
  <!-- FIN DE LA BARRA DE NAVEGACION -->


  <!-- BANNER -->
  <section class="banner">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-sm-auto">
          <h3>CAFE tacvba</h3>
          <span style="color: #DE7C7D;">Café y más</span>
          <p>El lugar donde el buen café cobra vida. Disfruta nuestra selección de Arábica, Robusta, Liberica y Excelsa, cada uno con su aroma, cuerpo y sabor único. Vive la experiencia del café auténtico en cada taza. ¡Te esperamos!</p>
        </div>
      </div>
    </div>
  </section>
  <!-- FIN DE BANNER -->

  <!-- PRODUCTOS -->
  <section class="products section-padding">
    <h1 class="heading m-5">Nuestros <span>Productos </span></h1>
    <div class="container">
      <div class="row row-cols-1 row-cols-md-3 g-4">

      <div class="col-lg-3 col-sm-6 grande chico" style="margin-top: 5px; margin-top:2rem;">
                <div class="card" style="height: 270px;">
                    <div class="card-body text-center">
                        <div class="icons card-title"></div>
                        <div class="card-text">
                          <a href="views/arabica.php"><h4 class="product-title">Arabica</h4></a>
                        </div>
                        
                        <a style="margin: auto;" href="views/arabica.php"><img href class="card-img-top pro" src="img/cafe/arabica.png" alt="Cafe arabico"></a>
                    </div>
                </div>
      </div>

      <div class="col-lg-3 col-sm-6 grande chico" style="margin-top: 5px; margin-top:2rem;">
                <div class="card" style="height: 270px;">
                    <div class="card-body text-center">
                        <div class="icons card-title"></div>
                        <div class="card-text">
                          <a href="views/robusta.php"><h4 class="product-title">Robusta</h4></a>
                        </div>

                        <a style="margin: auto;" href="views/robusta.php"><img href class="card-img-top pro" src="img/cafe/robusta.png" alt="Café Robusto"></a>

                    </div>
                </div>
      </div>

      <div class="col-lg-3 col-sm-6 grande chico" style="margin-top: 5px; margin-top:2rem;">
                <div class="card" style="height: 270px;">
                    <div class="card-body text-center">
                        <div class="icons card-title"></div>
                        <div class="card-text">
                          <a href="views/liberica.phpp"><h4 class="product-title">Liberica</h4></a>
                        </div>

                        <a style="margin: auto;" href="views/liberica.php"><img href class="card-img-top pro" src="img/cafe/liberico.png" alt="Café Liberico"></a>

                    </div>
                </div>
      </div>

      <div class="col-lg-3 col-sm-6 grande chico" style="margin-top: 5px; margin-top:2rem;">
                <div class="card" style="height: 270px;">
                    <div class="card-body text-center">
                        <div class="icons card-title"></div>
                        <div class="card-text">
                          <a href="views/excelsa.php"><h4 class="product-title">Excelsa</h4></a>
                        </div>

                        <a style="margin: auto;" href="views/excelsa.php"><img href class="card-img-top pro" src="img/cafe/excelsa.jpg" alt="Café Excelso"></a>

                    </div>
                </div>
      </div>


      </div>
    </div>
    </div>
  </section>
  <!-- FIN DE PRODUCTOS -->

  <!--Ubicación-->
  <section class="portafolio section-padding">
    <h1 class="heading m-5"><span> Encuentranos </span> en... <span><i class="bi bi-geo-alt-fill"></i></span></h1>
    <div class="container">
      <div class="row">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d449.93120621465016!2d-103.361127051372!3d25.55670300007251!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2smx!4v1737567151420!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </section>
  <!--Fin de ubicación-->


  <!-- FOOTER -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-sm-3 mx-auto">
          <div class="single-box">
            <h2>Acceso rápido</h2>
            <ul>
              <li><a href="#">Inicio</a></li>
              <li><a href="views/ver_producto_general.php">Productos</a></li>
              <li><a href="views/nosotros.php">Nosotros</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-sm-3 mx-auto">
          <div class="single-box">
            <h2>Información de contacto</h2>
            <ul>
              <li><a href="https://www.facebook.com/people/Fernando-Yael/pfbid02qhtaPLddVTbN2t7U9xi1Hber32pbKnBNsuZUoxUVhrgMdp6A5gSutPyd9xtheBbal/" target="_blank">Facebook <i class="bi bi-facebook"></i></a></li>
              <li><a href="mailto:cafetacvba@gmail.com" target="_blank">CAFEtavuca@gmail.com <i class="bi bi-envelope-heart"></i></a></li>
              <li><a href="https://www.google.com/maps?q=25.55673929674272,-103.36108547713413" target="_blank">Ubicación <i class="bi bi-geo-alt"></i></a></li>
            </ul>
            <p></p>
            <a href=""></a>
            <p> </a>
            <p></p>
          </div>
        </div>
      </div>
    </div>
    <div class="credit text-center">Creado por <span>
    <a style="color:#e84393;text-decoration: none;"" href=" https://www.instagram.com/jose_durann_/?utm_source=qr&igshid=NGExMmI2YTkyZg%3D%3D" target="_blank">José</a>,
        <a style="color:#e84393;text-decoration: none;"" href=" https://www.instagram.com/iceli.ts/" target=" _blank">Lizeth</a>,
        <a style="color:#e84393;text-decoration: none;"" href=" https://www.instagram.com/nael.php/" target=" _blank">Fernando</a></span> | all rigth reserve.</div>
    <div style="font-size: 9px;" class="m-1 text-center"><i class="bi bi-c-circle"></i>2023-2023, CAFEtacvba.com, Inc. o sus afiliados.</div>
  </footer>
  <!-- FIN DE FOOTER -->

  <!-- SCRIPTS -->
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script>
    $('.owl-carousel').owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 2
        },
        1000: {
          items: 3
        }
      }
    })
  </script>
  <script>
    function cambiarTituloPestana(nuevoTitulo) {
      document.title = nuevoTitulo;
    }


    window.addEventListener("focus", function() {
      cambiarTituloPestana("CAFÉ tacvba");
    });


    window.addEventListener("blur", function() {
      cambiarTituloPestana("Aún puedes hacer más cosas");
    });
  </script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="js/listas.js"></script>
  <script>
    const enlaces = document.querySelectorAll(".tcategoria");

    enlaces.forEach(enlace => {
      enlace.addEventListener("click", function(event) {
        event.preventDefault();
        const valor = this.innerText;
        const form = document.createElement("form");
        form.action = "scripts/verproductos_cat.php";
        form.method = "post";

        const input = document.createElement("input");
        input.type = "hidden";
        input.name = "tip_cater";
        input.value = valor;
        form.appendChild(input);

        document.body.appendChild(form);
        form.submit();
      });
    });
  </script>
</body>

</html>