<?php
  require_once('datos.inc');

  class baseDts
  {
    public static $instancia;
    private $usuario = USUARIO;
    private $clave = CLAVE;
    private $servidor = SERVIDOR;
    private $base_dts = BASE_DTS;

    private $resultado = array();
    private $contador = 0;
    private $conexion;
    private $consulta;

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
      $this->conexion = new mysqli($this->servidor, $this->usuario, $this->clave, $this->base_dts);
      if($this->conexion->connect_error)
        die($this->conexion->connect_error);
    }

    public function desconectar()
    {
      mysql_close($this->conexion);
    }

    public function ejecutar($accion)
    {
      $this->consulta = $this->conexion->query($accion);

      if($this->consulta)
      {
        if(is_object($this->consulta))
        {
          while($fila = $this->consulta->fetch_assoc())
            $this->resultado[] = $fila;

          $this->contador = $this->consulta->num_rows;
        }
      }
      else
      {
        die($this->conexion->error);
        return false;
      }

      return $this;
    }

    public function resultado()
    {
      return $this->resultado;
    }
  }
?>
