<?php
  require_once('ctrlEstandar.php');
  class gazebosCtrl extends ctrlEstandar
  {
    public function ejecutar()
    {
      $this->mostrar();
    }

    public function mostrar()
    {
      $head = $this->head("Terrasse | Gazebos");
      $vista = file_get_contents("Vista/gazebo.html");
      $footer = file_get_contents("Vista/footer.html");

      echo $head.$vista.$footer;
    }
  }
?>
