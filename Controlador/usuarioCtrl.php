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
          {
            $head = $this->head("Terrasse | Registro");
            $vista = file_get_contents("Vista/registro.html");
            $footer = file_get_contents("Vista/footer.html");

            echo $head.$vista.$footer;
          }
          else
            $this->agregarUsr();
          break;

        case 'sesion':
          $head = $this->head("Terrasse < Acceso");
          $vista = file_get_contents("Vista/sesion.html");
          $footer = file_get_contents("Vista/footer.html");

          echo $head.$vista.$footer;
          break;

        case 'inicSesion':
          $this->iniciarSesion();
          break;

        default: $controlador = new ctrlEstandar();
                 $controlador->E_404();
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
