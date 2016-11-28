<?php
  class gazebosCtrl
  {
    public function ejecutar()
    {
      $this->mostrar();
    }

    public function mostrar()
    {
      $head = file_get_contents("Vista/head.html");
      $vista = file_get_contents("Vista/gazebo.html");
      $footer = file_get_contents("Vista/footer.html");

      echo "<title>Terrasse | Gazebos</title>".$head.$vista.$footer;
    }
  }
?>
