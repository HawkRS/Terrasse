<?php
require("db/conexion.php");

function getArticulos()
{
	global $conexion;
	$resultado = mysql_query('SELECT * FROM producto',$conexion);
	$articulos  = array();
	
	while($articulo = mysql_fetch_array($resultado))
	{
		$articulos[] = $articulo;	
	}
	mysql_close($conexion);
	
	return $articulos;
}
?>
