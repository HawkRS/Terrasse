<?php
  require_once('ctrlEstandar.php');
  class accesoriosCtrl extends ctrlEstandar
  {
    public function ejecutar()
    {
      $this->mostrar();
    }

    public function mostrar()
    {
      $head = $this->head("Terrasse | Accesorios");
      $vista = file_get_contents("Vista/accesorios.html");
      $footer = file_get_contents("Vista/footer.html");

      echo $head.$vista.$footer;
    }
  }
?>
