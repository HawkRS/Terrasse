<?php
  class singleton
  {
    private static $instancia;
    private $dbh;

    private function __construct()
    {
      $this->dbh = new PDO("mysql:host=server;dbname=database", "user", "password");
    }

    public static function singleton()
    {
      if(!isset(self::$instancia))
      {
        $clase = __CLASS__;
        self::$instancia = new $clase;
      }
      return self::$instancia;
    }

    public function __clone()
    {
      trigger_error('¡No puedes copiar este objeto!',E_USER_ERROR);
    }

  }
?>
