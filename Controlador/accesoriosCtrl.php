<?php
  class accesoriosCtrl
  {
    public function ejecutar()
    {
      $this->ejecutar();
    }

    public function mostrar()
    {
      $head = file_get_contents("Vista/head.html");
      $vista = file_get_contents("Vista/accesorios.html");
      $footer = file_get_contents("Vista/footer.html");

      echo $head.$vista.$footer;
    }
  }
?>
