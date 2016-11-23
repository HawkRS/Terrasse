<!DOCTYPE html>
<html lang="es">
<head>
    <?php include 'Vista/head.html'; ?>
</head>
  

  <body>
      <div class="info">
        <!--INICIA SECCION PRINCIPAL-->
        <section class="sesionP">
            <div>
                <div class="AIndividual">
              <div class="ADes">
                <h1>Listado de Articulos</h1>
            <table border="1">
    	       <tr><th>ID</th><th>Foto</th><th>Descripción</th><th>Precio</th></tr>
            <?php
			foreach($articulos as $articulo)
			{
				echo "<tr>";
				echo "<td>" . $articulo['id_producto']."</td>";
				echo "<td>" . $articulo['foto']."</td>";
				echo "<td>" . $articulo['descripcion']."</td>";
				echo "<td>" . $articulo['precio']."</td>";
				echo "</tr>";
			}
		?>
    </table>
              </div>
            </div>
            </div>
          <!--INICIA INFO DE LA EMPRESA-->
        </section>
      </div>
  </body>

  <footer class="clear">
    <?php include 'Vista/footer.html'; ?>
  </footer>
</html>
