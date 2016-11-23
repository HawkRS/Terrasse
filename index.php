<?php
  
  require("Modelo/modelo.php");
  $articulos= getArticulos();
  session_start();

  if(isset($_GET) && !empty($_GET['ctrl']))
  {
    $controlador = $_GET['ctrl'];
    switch($controlador)
    {
      case '':
      case 'inicio':
        require_once('Controlador/inicioCtrl.php');
        $controlador = new inicioCtrl();
        break;

      case 'asadores':
        require_once('Controlador/asadoresCtrl.php');
        $controlador = new asadoresCtrl();
        break;

      case 'firepit':
        require_once('Controlador/firepitCtrl.php');
        $controlador = new firepitCtrl();
        break;

      case 'gazebos':
        require_once('Controlador/gazebosCtrl.php');
        $controlador = new gazebosCtrl();
        break;

      case 'accesorios':
        require_once('Controlador/accesoriosCtrl.php');
        $controlador = new accesoriosCtrl();
        break;

	case 'productos':
       
        require('Vista/productos.php');
        $controlador = new productosCtrl();
        break;

      case 'contacto':
        require_once('Controlador/contactoCtrl.php');
        $controlador = new contactoCtrl();
        break;

      case 'usuario':
        require_once('Controlador/usuarioCtrl.php');
        $controlador = new usuarioCtrl();
        break;

      case 'equipo':
        require_once('Controlador/equipoCtrl.php');
        $controlador = new equipoCtrl();
        break;

      default: http_response_code(404);
    }

    $controlador->ejecutar();
  }
  else
  {
    require_once('Controlador/inicioCtrl.php');
    $controlador = new inicioCtrl();
    $controlador->ejecutar();
  }
?>
