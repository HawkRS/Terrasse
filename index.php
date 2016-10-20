<!DOCTYPE html>
<html lang="es">

  <head>
    <meta charset="utf-8">
    <title>TERRASSE</title>
    <link rel="stylesheet" href="css/carrusel.css" type="text/css" media="screen">
    <?php include 'head.php' ?>
  </head>

  <body>
  
    <div class="contenedor">
      <div class="slides">
        <img src="img/carrusel/index/01.jpg" alt="" />
        <img src="img/carrusel/index/02.jpg" alt="" />
        <img src="img/carrusel/index/03.jpg" alt="" />
      </div>

    </div>
        <!--INICIA BLOQUE PRINCIPAL-->
    <div class="bloque">
      <!--INICIA SECCION PRINCIPAL-->
      <section class="MSection">
        <!--TERMINA GRID DE ARTICULOS-->
        <div class="articulos">
          <div class="AG1">
            <div class="ART">
              <img class="AIma" src="img/ofertas/escala/XYimg2.png" alt="Asadores" id="AIma"/>
              <li class="MLink"><a href="asadores.php">ASADORES</a></li>
            </div>
            <div class="ART">
              <img class="AIma" src="img/ofertas/escala/XYimg2.png" alt="Firepit" id="AIma"/>
              <li class="MLink"><a href="firepit.php">FIREPIT</a></li>
            </div>
          </div>
          <div class="AG1">
            <div class="ART">
              <img class="AIma" src="img/ofertas/escala/XYimg2.png" alt="Asadores" id="AIma"/>
              <li class="MLink"><a href="gazebos.php">GAZEBOS</a></li>
            </div>
            <div class="ART">
              <img class="AIma" src="img/ofertas/escala/XYimg2.png" alt="Firepit" id="AIma"/>
              <li class="MLink"><a href="accesorios.php">ACCESORIOS</a></li>
            </div>
          </div>
        </div>
        <!--INICIA INFO DE LA EMPRESA-->
        <div>
          <div class="acerca">
            <h4>ACERCA DE NOSOTROS</h4>
            <p class="MPInfo">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
               Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
               Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
               Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
          </div>
          <div class="compranos">
            <h4>PORQUE ELEGIR A TERRASSE</h4>
            <p class="MPInfo">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
               Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
               Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
               Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
          </div>
        </div>
      </section>
    </div>

    <!--Script para activar el carrusel-->
    <script src="js/jquery.js"></script>
		<script src="js/jquery.slides.js"></script>
		<script>

				$(function(){
				$(".slides").slidesjs({
					play: {
						active: true,
						effect: "slide",
						interval: 3000,
						auto: true,
						swap: true,
						pauseOnHover: false,
						restartDelay: 2500
				    }
				});
				});
		</script>
  </body>

  <footer class="clear">
    <?php include 'footer.php'; ?>
  </footer>
</html>
