
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
<script src="../js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
  $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
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
    <script src="../js/listas.js"></script>
    <script>
    const enlaces = document.querySelectorAll(".tcategoria");

    enlaces.forEach(enlace => {
        enlace.addEventListener("click", function(event) {
            event.preventDefault();
            const valor = this.innerText;
            const form = document.createElement("form");
            form.action = "../scripts/verproductos_cat.php";
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