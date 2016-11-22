<?php

  class contactoCtrl
  {
    public function ejecutar()
    {
      if(isset($_GET['act']))
      {
        $accion = $_GET['act'];
        switch($accion)
        {
          case '':
            $this->mostrar();
            break;

          default: http_response_code(404);
        }
      }
      else
        $this->mostrar();
    }

    public function mostrar()
    {
      $head = file_get_contents("Vista/head.html");
      $vista = file_get_contents("Vista/contacto.html");
      $footer = file_get_contents("Vista/footer.html");

      echo $head.$vista.$footer;
    }
  }

?>
