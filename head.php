<div>
  <link rel="icon" href="icono.ico">
  <link rel="stylesheet" href="css/index.css"  type="text/css" media="screen">
  <link href="https://fonts.googleapis.com/css?family=Lato|Merriweather|Raleway|Roboto|Roboto+Condensed" rel="stylesheet">

  <!--INICIA BARRA DE MENU-->
  <img class="Logo"src="img/logos/terrasse.png" alt="Terrasse" id="MLogo"/>
  <nav>
    <ul>
      <li class="inicio">     <a href="index.php">INICIO</a></li>
      <li class="asadores">   <a href="asadores.php">ASADORES</a></li>
      <li class="firepit">    <a href="firepit.php">FIREPIT</a></li>
      <li class="gazebos">    <a href="gazebo.php">GAZEBOS</a></li>
      <li class="accesorios"> <a href="accesorios.php">ACCESORIOS</a></li>
      <li class="galeria">    <a href="galeria.php">GALERIA</a></li>
      <li class="contacto">   <a href="contacto.php">CONTACTO</a></li>
    </ul>
  </nav>
  <!--TERMINA BARRA DE MENU-->

  <!--INICIA BARRA LATERAL-->
  <aside class="Barra">

    <!--INICIO DE SESION/INFORMACION DE SESION DE USUARIO-->
    <div id="contact-form" style="clear: both">
      <form method="post">
        <!-- Ingreso de nombre de usuario -->
        <label for="usuario">Nombre de usuario:</label>
        <input type="text" name="usuario" id="usuario" autofocus="autofocus">
        <!-- Ingreso de contraseña -->
        <label for="clave">Contraseña:</label>
        <input type="password" name="clave" id="clave" autofocus="autofocus">
        <!-- Enviar la solicitud -->
        <input type="submit" value="Iniciar sesión" id="submit">
        <!-- Mostrar formulario de registro de nvo usuario -->
        <input type="button" value="Crear cuenta" id="usrNvo" onclick="window.location.href='registro.php'">
      </form>
    </div>

    <!--INICIA PROMOS-->
    <div class="Promos">
      <h3>PROMOCION DE LA SEMANA</h3>
      <div class="ArtP">
        <img class="Pima" src="img/ofertas/escala/XYimg3.jpg" alt="Promos1" id="Pima"/>
        <p>Asador #003</p>
        <p><span class="FC1">Precio regular: </span><span class="PReg">$2500</span></p>
        <p><span class="FC1">Precio por promocion: </span><span class="PPro">$1499</span></p>
      </div>
      <div class="ArtP">
        <img class="Pima" src="img/ofertas/escala/XYimg3.jpg" alt="Promos1" id="Pima"/>
        <p>Asador #003</p>
        <p><span class="FC1">Precio regular: </span><span class="PReg">$2500</span></p>
        <p><span class="FC1">Precio por promocion: </span><span class="PPro">$1499</span></p>
      </div>
      <div class="ArtP">
        <img class="Pima" src="img/ofertas/escala/XYimg3.jpg" alt="Promos1" id="Pima"/>
        <p>Asador #003</p>
        <p><span class="FC1">Precio regular: </span><span class="PReg">$2500</span></p>
        <p><span class="FC1">Precio por promocion: </span><span class="PPro">$1499</span></p>
      </div>
    </div>
    <!--TERMINA PROMOS-->
  </aside>
  <!--TERMINA BARRA LATERAL-->

</div>
