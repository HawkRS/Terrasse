<?php
  require_once('ctrlEstandar.php');
  class asadoresCtrl extends ctrlEstandar
  {
    public function ejecutar()
    {
      $this->mostrar();
    }

    public function mostrar()
    {
      $head = $this->head("Terrasse | Asadores");
      $vista = file_get_contents("Vista/asadores.html");
      $footer = file_get_contents("Vista/footer.html");

      echo $head.$vista.$footer;
    }
  }
?>
