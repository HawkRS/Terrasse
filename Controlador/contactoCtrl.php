<?php
  require_once('ctrlEstandar.php');
  class contactoCtrl extends ctrlEstandar
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

          default: $controlador = new crtlEstandar();
                   $controlador->E_404();
        }
      }
      else
        $this->mostrar();
    }

    public function mostrar()
    {
      $head = $this->head("Terrasse | Contacto");
      $vista = file_get_contents("Vista/contacto.html");
      $footer = file_get_contents("Vista/footer.html");

      echo $head.$vista.$footer;
    }
  }

?>
