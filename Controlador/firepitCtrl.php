<?php
  class firepitCtrl
  {
    public function ejecutar()
    {
      $this->mostrar();
    }

    public function mostrar()
    {
      $head = file_get_contents("Vista/head.html");
      $vista = file_get_contents("Vista/firepit.html");
      $footer = file_get_contents("Vista/footer.html");

      echo $head.$vista.$footer;
    }

  }
?>
