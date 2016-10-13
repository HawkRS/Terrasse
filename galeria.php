<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title>GALERIA | TERRASSE</title>
    <link rel="stylesheet" href="css/galeria.css"  type="text/css" media="screen">
    <link rel="stylesheet" href="css/carrusel.css" type="text/css" media="screen">
    <?php include 'head.php'; ?>
  </head>

  <body>
    <!--Carrusel-->
    <div class="contenedor">
      <div class="slides">
        <img src="img/carrusel/galeria/01.jpg" alt="#" />
        <img src="img/carrusel/galeria/02.jpg" alt="#" />
        <img src="img/carrusel/galeria/03.jpg" alt="#" />
      </div>
    </div>

    <!--Comienza tabla con images de los productos -->
    <div class="tabla">
      <table>
        <thead>
          <tr>
            <th colspan="4" style="text-aling: center">
              <h3>Imágenes de muestra</h3>
            </th>
          </tr>
        </thead>

        <tr>
          <td>
            <img src="img/gazebos/escala/XYgazebo1.jpg" alt="XYgazebo" />
          </td>
          <td>
            <img src="img/gazebos/escala/XYgazebo2.jpg" alt="XYgazebo" />
          </td>
          <td>
            <img src="img/gazebos/escala/XYgazebo3.jpg" alt="XYgazebo" />
          </td>
          <td>
            <img src="img/noImg.png" alt="no disponible" />
          </td>
        </tr>

        <tr>
          <td>
            <img src="img/asadores/escala/XYasador1.jpg" alt="XYasador" />
          </td>
          <td>
            <img src="img/asadores/escala/XYasador2.jpg" alt="XYasador" />
          </td>
          <td>
            <img src="img/asadores/escala/XYasador3.jpg" alt="XYasador" />
          </td>
          <td>
            <img src="img/noImg.png" alt="no disponible" />
          </td>
        </tr>

        <tr>
          <td>
            <img src="img/firepit/escala/XYfirepit1.jpg" alt="XYfirepit" />
          </td>
          <td>
            <img src="img/firepit/escala/XYfirepit2.jpg" alt="XYfirepit" />
          </td>
          <td>
            <img src="img/firepit/escala/XYfirepit3.jpg" alt="XYfirepit" />
          </td>
          <td>
            <img src="img/noImg.png" alt="no disponible" />
          </td>
        </tr>
      </table>
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
