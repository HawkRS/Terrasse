<?php
  require_once('baseDts.php');
  class usuarioMdl extends baseDts
  {
    private $conexion;

    function __construct()
    {
      parent::__construct();
      $this->conexion = baseDts::instanciaBD();
    }
  }
?>
