<?php
	$conexion = mysql_connect("localhost","root","");
	if(!$conexion)
	{
		die("No se pudo conectar al servidor " .  mysql_error());
	}
	$database = mysql_select_db("terrasse",$conexion);
	if(!$database)
	{
		die("No se ha podido seleccionar la base de datos " . mysql_error());
	}
?>
