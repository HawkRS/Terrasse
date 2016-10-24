<!DOCTYPE html>

<html lang="es">

  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/registro.css" media="screen" type="text/css">
    <title>REGISTRO | TERRASSE</title>
  </head>

  <body>
    <script type="text/javascript" >
    //Función para validar que las cadenas sean digitos y espacios en blanco
    function validarNum(cad)
    {
      //var cad = /([A-Z0-9\s\\]+)/i;
      /*var cad = document.getElementById('tel').value;*/
      var cadAux = "";

      for (var i = 0; i < cad.length; i++) {
          if (cad.charAt(i) != ' ') {
            cadAux += cad.charAt(i);
          }
      }

      if (isNaN(cadAux)) {
        alert("Solo tienen que ser digitos");
      }
    }
;
    //Validar la contraseña
    function validarClv()
    {
      var cad1 = document.getElementById('clave');
      var cad2 = document.getElementById('confirmaClv');

      if (cad1.value != cad2.value) {
        alert("La contraseña no coincide");
      }
    }
    </script>

    <div id="envoltura">
      <div id="contenedor">
        <div id="cabecera">
          <img src="img/logos/terrasse.png" alt="logo de la pagina" style="width: 200px"/>
        </div>
        <div id="cuerpo">
            <form method="post">
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
              <label for="confirmaClv">Confirmar contraseña:<span>*</span></label>
              <input type="password" name="confirmaClv" id="confirmaClv" required="required">

              <!-- guardar datos -->
              <button type="submit" name="btG" id="btG" onclick="validarNum(document.getElementById('tel').value), validarClv()">Guardar</button>
              <!-- calcelar registro -->
              <button type="button" name="btC" id="btC"><a href="index.php">Cancelar</a></button>
            </form>
        </div>

      </div>
    </div>
  </body>
</html>
