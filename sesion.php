<!DOCTYPE html>

<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Terrasse < Acceder</title>
    <link rel="stylesheet" href="css/sesion.css" media="screen" type="text/css">
  </head>

  <body>
    <div class="formulario">
      <h1><a href="index.php" tabindex="-1" title="Articulos para terrazas">Terrasse</a></h1>

      <form id="form_sesion" method="post">
        <p>
          <label for="usrNom">Nombre de usuario o correo electrónico:<br></label>
          <input type="text" name="usrNom" id="usrNom" size="20">
        </p>

        <p>
          <label for="usrClv">Contraseña:<br></label>
          <input class="entrada" type="password" name="usrClv" id="usrClv" size"20">
        </p>

        <p class="gdrSesion">
          <label for="recordar">Recuerdame</label>
          <input type="checkbox" name="recordar" id="recordar" value="forever">
        </p>

        <p class="enviar">
          <button type="submit" name="acceder" id="acceder" >Acceder</button>
        </p>
      </form>
      <p id="opc">
        <a href="registro.php">Registrarse</a>
        |
        <a href="#">¿Has perdido tu contraseña?</a>
        <br><br>
        <a href="index.php">Regresar a TERRASSE</a>
      </p>
    </div>

    </form>
  </body>

</html>
