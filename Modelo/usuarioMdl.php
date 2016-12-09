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

    public function sesion($usuario,$clv)
    {
      $consulta = 'SELECT * FROM Usuarios WHERE nomUsr = "'.$usuario.'" AND clave = "'.$clv.'" LIMIT 1';
      $usuarios = $this->conexion->ejecutar($consulta)->resultado();

      return $usuarios;
    }
  }
?>
