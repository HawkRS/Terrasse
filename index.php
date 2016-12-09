<?php

  session_start();

  if(isset($_GET) && !empty($_GET['ctrl']))
  {
    $controlador = $_GET['ctrl'];
    $band = false;

    switch($controlador)
    {
      case '':
      case 'inicio':
        require_once('Controlador/inicioCtrl.php');
        $controlador = new inicioCtrl();
        break;

      case 'producto':
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

      case 'carrito':
        require_once('Controlador/carritoCtrl.php');
        $controlador = new carritoCtrl();
        break;

      default: require_once('Controlador/ctrlEstandar.php');
               $controlador = new ctrlEstandar();
    }

    if($band)
      $controlador->E_404();
    else
      $controlador->ejecutar();
  }
  else
  {
    require_once('Controlador/inicioCtrl.php');
    $controlador = new inicioCtrl();
    $controlador->ejecutar();
  }
?>
