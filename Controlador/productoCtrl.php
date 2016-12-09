<?php
  require_once('ctrlEstandar.php');
  class productoCtrl extends ctrlEstandar
  {
    public function ejecutar()
    {
      $accion = $_GET['act'];
      switch($accion)
      {
        case 'v_Asadores':
          $this->mostrar("Terrasse | Asadores","Vista/asadores.html");
          break;

        case 'v_Firepit':
          $this->mostrar("Terrasse | Firepit","Vista/firepit.html");
          break;

        case 'v_Gazebos':
          $this->mostrar("Terrasse | Gazebos","Vista/gazebo.html");
          break;

        case 'v_Accesorios':
          $this->mostrar("Terrasse | Accesorios","Vista/accesorios.html");
          break;

        case 'v_Productos':
          $this->mostrar("Terrasse | Productos","Vista/productos.html");
          break;

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

    public function mostrar($titulo,$ruta)
    {
      $head = $this->head($titulo);
      $vista = file_get_contents($ruta);
      $footer = file_get_contents("Vista/footer.html");

      echo $head.$vista.$footer;
    }
  }
?>
