<link rel="icon" href="icono.ico">
<link rel="stylesheet" href="css/general.css"  type="text/css" media="screen">
<link href="https://fonts.googleapis.com/css?family=Lato|Merriweather|Raleway|Roboto|Roboto+Condensed" rel="stylesheet">

<div class="fijo">

  <!-- Sección para realizar busquedas -->
  <section class="menu_BS">
    <div class="busqueda">
      <form method="post">
        <input type="text" name="caja_B" id="caja_B" placeholder="Buscar...">
        <button type="button" name="bt_B" id="bt_B"></button>
      </form>
    </div>

    <section class="sesion">
      <a href="sesion.php">Iniciar sesion</a>
      <span>|</span>
      <a href="registro.php">Registrar</a>
    </section>
  </section>

  <!-- Menú para navegar dentro de las diferentes secciones del sistio-->
  <nav class="menu_Nav clear">
    <a href="equipo.php"><img src="img/logos/XYterrasse.png" alt="Desarrolladores del sito web" class="logo"/></a>

    <!--Opciones del menú-->
    <nav id="opciones">
      <ul>
        <li><a href="index.php">Inicio</a></li>
        <li><a href="asadores.php">Asadores</a></li>
        <li><a href="firepit.php">Firepit</a></li>
        <li><a href="gazebo.php">Gazebos</a></li>
        <li><a href="accesorios.php">Accesorios</a></li>
        <li><a href="contacto.php">Contacto</a></li>
      </ul>
    </nav>
  </nav>
</div>
