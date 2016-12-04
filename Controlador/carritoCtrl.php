<?php
  require_once('ctrlEstandar.php');

  class CarritoCtrl extends ctrlEstandar
  {
    private $modelo;

    function __construct()
    {
      require_once('./Modelo/carritoMdl.php');
      $this->modelo = new carritoMdl();
    }

    public function ejecutar()
    {
      if(isset($_GET['act']))
      {
        $accion = $_GET['act'];

        switch($accion)
        {
          case 'mostrar':
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
      $head = $this->head("Terrasse | carrito");
      $vista = file_get_contents('Vista/carrito.html');
      $footer = file_get_contents('Vista/footer.html');

      echo $head.$vista.$footer;
    }
  }
?>
