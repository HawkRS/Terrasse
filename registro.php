<!DOCTYPE html>

<html lang="es">

  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/registro.css" media="screen" type="text/css">
    <title>REGISTRO | TERRASSE</title>
  </head>

  <body>

    <div id="envoltura">
      <div id="contenedor">
        <div id="cabecera">
          <img src="img/logos/terrasse.png" alt="logo de la pagina" style="width: 200px"/>
        </div>
        <div id="cuerpo">
            <form method="post" id="nvoUsr">
              <!-- Ingreso del nombre del usuario -->
              <label for="nombre">Nombre:<span>*</span></label>
              <input type="text" name="nombre" id="nombre" required="required">

              <!-- Nombre de usuario para entrar al sistema -->
              <label for="usrNom">Nombre de usuario:<span>*</span></label>
              <input type="text" name="usrNom" id="usrNom" required="required">

              <!-- ingreso de telefono -->
              <label for="tel">Tel:<span>*</span></label>
              <input type="text" name="tel" id="tel" required="required">

              <!-- ingreso de número celular -->
              <label for="cel">Cel:</label>
              <input type="text" name="cel" id="cel">

              <!-- ingreso de Domicilio -->
              <label for="dom">Domicilio:<span>*</span></label>
              <input type="text" name="dom" id="dom" required="required">

              <!-- ingreso de correo electronico -->
              <label for="correo">e-mail:<span>*</span></label>
              <input type="email" name="correo" id="correo" required="required" placeholder="usuario@ejemplo.com">

              <!-- Contraseña -->
              <label for="clave">Contraseña:<span>*</span></label>
              <input type="password" name="clave" id="clave" required="required">
              <!-- Confirmar contraseña -->
              <label for="cclave">Confirmar contraseña:<span>*</span></label>
              <input type="password" name="cclave" id="cclave" required="required">

              <!-- guardar datos -->
              <button type="button" name="btG" id="btG" onclick="validarForm()">Guardar</button>
              <!-- calcelar registro -->
              <button type="button" name="btC" id="btC"><a href="index.php">Cancelar</a></button>
            </form>
        </div>

      </div>
    </div>

    <!-- Llamada al archivo JS para validar el formulario -->
    <script type="text/javascript" src="js/valRegistro.js"></script>

  </body>
</html>
