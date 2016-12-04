<?php
  require_once('ctrlEstandar.php');
  class productoCtrl extends ctrlEstandar
  {
    public function ejecutar()
    {
      $accion = $_GET['act'];
      switch($accion)
      {
        case 'registrar':
          if(empty($_POST))
            echo file_get_contents('Vista/formularioProducto.html');
          else
            $this->agregarPrd();
          break;

        default: $controlador = new ctrlEstandar();
                 $controlador->E_404();
      }
    }

    private function agregarPrd()
    {
      var_dump($_POST);
      if(isset($_POST['nomProducto']) && isset($_POST['cantidad']) && isset($_POST['descripcion'])
       && isset($_POST['imgProducto']))
       {
         $producto = $_POST['nomProducto'];
         $cantidad = $_POST['cantidad'];
         $descripcion = $_POST['descripcion'];
         $imagen = $_POST['imgProducto'];
       }
    }
  }
?>
