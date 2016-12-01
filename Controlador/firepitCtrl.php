<?php
  require_once('ctrlEstandar.php');
  class firepitCtrl extends ctrlEstandar
  {
    public function ejecutar()
    {
      $this->mostrar();
    }

    public function mostrar()
    {
      $head = $this->head("Terrase | Firepit");
      $vista = file_get_contents("Vista/firepit.html");
      $footer = file_get_contents("Vista/footer.html");

      echo $head.$vista.$footer;
    }

  }
?>
