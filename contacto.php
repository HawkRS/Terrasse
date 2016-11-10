<!DOCTYPE html>
<html lang="es">

  <head>
    <meta charset="utf-8">
    <title>TERRASSE</title>
    <link rel="stylesheet" href="css/carrusel.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/contacto.css" media="screen" type="text/css">
    <?php include 'head.php';?>
  </head>

  <body>
    <!--Carrusel-->
    <div class="contenedor">
      <div class="slides">
        <img src="img/carrusel/contacto/01.jpg" alt="#" />
        <img src="img/carrusel/contacto/02.jpg" alt="#" />
        <img src="img/carrusel/contacto/03.jpg" alt="#" />
        <img src="img/carrusel/contacto/04.jpg" alt="#" />
      </div>
    </div>

    <div class="info">
        <!--INICIA SECCION PRINCIPAL-->
        <section class="MSection posicion">
          <!--INICIA INFO DE CONTACTO-->
          <section class="importante dir">
            <p>
              <b>Nuestro contacto:</b> <br><br>
              Lauro Badillo Díaz #420 <br>
              Col. Badillo de Chapala <br>
              Talquepaque, Jalisco <br><br>
              Telefono: 36-70-69-91  |  333-368-9393 <br>
              e-mail: Ventas@Terrasse.com.mx
            </p>
          </section>

          <!--INICIA FORMULARIO DE CONTACTO-->
          <div class="contenedorF">
            <p>
              <b>Si deceas contactarnos:</b>
            </p>
            <form method="post" id="contactoForm">
              <label for="nombreC">Nombre:<span>*</span></label>
              <input type="text" name="nambreC" id="nombreC" required="required">

              <label for="emailC">e-mail:<span>*</span></label>
              <input type="email" name="emailC" id="emailC" placeholder="usuario@ejemplo.com" required="required">

              <label for="telC">Telefono:<span>*</span></label>
              <input type="text" name="telC" id="telC" required="required">

              <label for="swC">Sitio web:</label>
              <input type="text" name="swC" id="swC" placeholder="www.tu-sitio-web.com">

              <label for="msjC">Mensaje:<span>*</span></label>
              <textarea name="msjC" id="msjC" rows="8" cols="40" required="required"></textarea>

              <button type="button" name="enviarC" id="enviarC" onclick="validarForm()">Enviar mensaje</button>
            </form>
          </div>
        </section>
      </div>

      <!--Script para validar el telefono-->
      <script type="text/javascript">
        var form = document.getElementById('contactoForm');

        function validarForm(){
          var tel = document.getElementById('telC');
          var cadAux = "";

          for(var i=0; i<telC.value.length; i++)
            if(telC.value.charAt(i) != ' ' && telC.value.charAt(i) != '-')
              cadAux += telC.value.charAt(i);

          if(isNaN(cadAux)){
            var div_error = document.getElementById('error_tel');
            if(div_error === null)
              mensajeE(tel,'error_tel','¡Soló debes teclear números!');
          }
          else{
            var div_error = document.getElementById('error_tel');
            if(div_error !== null)
              form.removeChild(div_error);
          }

        }

        function mensajeE(ent,tpError,mensaje){
          var div = document.createElement('div');
          div.setAttribute('class','error');
          div.setAttribute('id','error_tel');

          var msj = document.createTextNode(mensaje);
          div.appendChild(msj);
          form.insertBefore(div,ent.nextSibling);
        }

      </script>

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
    <?php include 'footer.php';?>
  </footer>
</html>
