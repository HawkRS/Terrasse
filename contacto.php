<!DOCTYPE html>
<html lang="es">

  <head>
    <meta charset="utf-8">
    <title>TERRASSE</title>
    <?php include 'head.php';?>
  </head>

  <body>
      <!--INICIA SECCION PRINCIPAL-->
      <section class="MSection">
        <!--INICIA SLIDER-->
        <div class="Slider">
          <img src="imagenes/02_TERRAZA-A.jpg" alt="SLIDER" id="Slider"/>
        </div>
        <!--INICIA INFO DE CONTACTO-->
        <div class="inside">
            <h2>Nuestro Contacto</h2>
				<div class="NContact">
				    <address>
            <p>Lauro Badillo Diaz #420</p>
            <p>Col. Brisas de Chapala</p>
            <p>Tlaquepaque, Jalisco</p>
            <p>Telefonos:  36-70-69-91  |  333-968-9393</p>
            <p>Ventas@Terrasse.com.mx</p>
				    </address>
				    <p class="EXTInfo"><b>Mas Información:</b><br>
				        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				</div>
          </div>
        <!--TERMINA INFO DE CONTACTO-->
        <!--INICIA FORMULARIO DE CONTACTO-->
        <div class="contform">
        <h2 id="h2form">Formulario de Contacto</h2>
            <form id="contacts-form" action="." oninput="range_control_value.value = range_control.valueAsNumber">
				<fieldset>
				    <div class="campo">
				        <label>Nombre: </label>
				        <input title="Se Necesita un Nombre" type="text" value="" required />
				    </div>
				    <div class="campo">
				        <label>E-mail: </label>
				        <input type="email" value="" required />
				    </div>
				    <div class="campo">
				        <label>Website:    </label>
				        <input type="text" value="" placeholder="Ingresa la URL de tu Página" />
				    </div>
				    <div class="campo">
				        <label>Mensaje:    </label>
				        <textarea cols="1" rows="1" required></textarea>
				    </div>
                    <button id="boton" type="submit">Enviar Mensaje</button>
				</fieldset>
            </form>
        </div>
        <!--TERMINA FORMULARIO DE CONTACTO-->
      </section>
    </div>
  </body>

  <footer class="clear">
    <?php include 'footer.php';?>
  </footer>
</html>
