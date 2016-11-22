<?php

  class usuarioCtrl
  {
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

        default: http_response_code(404);
      }
    }

    public function agregarUsr()
    {

    }
  }

?>
