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
    <div class="info">
      <!--Comienza tabla con images de los productos -->
      <div class="contImg">
        <div class="tabla ocultar">
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
                <img class="zoom" src="img/gazebos/escala/XYgazebo1.jpg" alt="XYgazebo" />
              </td>
              <td>
                <img class="zoom" src="img/gazebos/escala/XYgazebo2.jpg" alt="XYgazebo" />
              </td>
              <td>
                <img class="zoom" src="img/gazebos/escala/XYgazebo3.jpg" alt="XYgazebo" />
              </td>
              <td>
                <img class="zoom" src="img/noImg.png" alt="no disponible" />
              </td>
            </tr>

            <tr>
              <td>
                <img class="zoom" src="img/asadores/escala/XYasador1.jpg" alt="XYasador" />
              </td>
              <td>
                <img class="zoom" src="img/asadores/escala/XYasador2.jpg" alt="XYasador" />
              </td>
              <td>
                <img class="zoom" src="img/asadores/escala/XYasador3.jpg" alt="XYasador" />
              </td>
              <td>
                <img class="zoom" src="img/noImg.png" alt="no disponible" />
              </td>
            </tr>

            <tr>
              <td>
                <img class="zoom" src="img/firepit/escala/XYfirepit1.jpg" alt="XYfirepit" />
              </td>
              <td>
                <img class="zoom" src="img/firepit/escala/XYfirepit2.jpg" alt="XYfirepit" />
              </td>
              <td>
                <img class="zoom" src="img/firepit/escala/XYfirepit3.jpg" alt="XYfirepit" />
              </td>
              <td>
                <img class="zoom" src="img/noImg.png" alt="no disponible" />
              </td>
            </tr>
          </table>
        </div>
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
    </div>
  </body>

  <footer class="clear">
    <?php include 'footer.php'; ?>
  </footer>
</html>
