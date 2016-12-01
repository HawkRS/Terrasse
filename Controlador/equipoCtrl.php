<?php
  require_once('ctrlEstandar.php');
  class equipoCtrl extends ctrlEstandar
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

          default: $controlador = new ctrlEstandar();
                   $controlador->E_404();
        }
      }
      else
        $this->mostrar();
    }

    public function mostrar()
    {
      $head = $this->head("Terrasse | Equipo");
      $vista = file_get_contents("Vista/equipo.html");
      $footer = file_get_contents("Vista/footer.html");

      echo $head.$vista.$footer;
    }

  }

?>
