<?php

  require_once('ctrlEstandar.php');
  class usuarioCtrl extends ctrlEstandar
  {
    private $modelo;

    function __construct()
    {
      require_once('./Modelo/usuarioMdl.php');
      //$this->modelo = new usuarioMdl();
    }

    public function ejecutar()
    {
      $accion = $_GET['act'];
      switch($accion)
      {
        case 'registrar':
          if(empty($_POST))
            echo file_get_contents("Vista/registro.html");
          else
            $this->agregarUsr();
          break;

        case 'sesion':
          echo file_get_contents("Vista/sesion.html");
          break;

        case 'inicSesion':
          $this->iniciarSesion();
          break;

        default: http_response_code(404);
      }
    }

    public function agregarUsr()
    {
      var_dump($_POST);
      if(isset($_POST['nombre']) && isset($_POST['apellidoP']) && isset($_POST['apellidoM'])
			&& isset($_POST['usrNom']) && isset($_POST['tel']) 	     && isset($_POST['cel'])
			&& isset($_POST['dom'])    && isset($_POST['colonia']) 	 && isset($_POST['cp'])
			&& isset($_POST['correo']) && isset($_POST['clave'])     && isset($_POSRT['cclave']))
      {
        $nombre = $_POST['nombre'];
        $apellidoP = $_POST['apellidoP'];
        $apellidoM = $_POST['apellidoM'];
        $usrNom = $_POST['usrNom'];
        $tel = $_POST['tel'];
        $cel = $_POST['cel'];
        $dom = $_POST['dom'];
        $correo = $_POST['correo'];
        $clave = $_POST['clave'];
        $cclave = $_POST['cclave'];
      }
    }

    public function iniciarSesion()
    {

    }
  }

?>
