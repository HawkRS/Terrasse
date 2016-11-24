<?php
  require_once('datos.inc');

  class baseDts
  {
    public static $instancia;
    

    public function __construct()
    {
      $this->conectar();
    }

    //se crea la instancia y se evita crear una nueva si otra ya existe
    public static function instanciaBD()
    {
      if(!isset(self::$instancia))
      {
        $clase = __CLASS__;
        self::$instancia = new $clase;
      }
      return self::$instancia;
    }

    //evita clonar el objeto con la instancia
    public function __clone()
    {
      trigger_error('¡No se pude copiar este objeto!',E_USER_ERROR);
    }

    //conexión a la base de datos
    public function conectar()
    {
      $this->conexion = new mysqli();
      if($this->conexion->connect_error)
        die($this->conexion->connect_error);
    }
  }
?>
