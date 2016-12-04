<?php
  class ctrlEstandar
  {
    public function cerrarSesion()
    {
      session_unset();
      session_destroy();
      setcookie(session_name(),'',time()-3600);
    }

    public function sesionInic()
    {
      if(isset($_SESSION['ususario']))
        return true;
      return false;
    }

    public function head($titulo = "Terrasse | Inicio")
    {
      if($this->sesionInic())
      {
        $head = file_get_contents('Vista/head_sesion.html');
        $ususario = $_SESSION['usuario'];
        $head = str_replace("{usuario}",$usuario,$head);
        $head = str_replace("{titulo}",$titulo,$head);
      }
      else
      {
        $head = file_get_contents('Vista/head.html');
        $head = str_replace("{titulo}",$titulo,$head);
      }

      return $head;
    }

    public function usrAdmin()
    {
      if(isset($_SESSION['tipo']) && $_SESSION['tipo'] == 'admin')
        return true;
      return false;
    }

    public function usrNorm()
    {
      if(isset($_SESSION['tipo']) && $_SESSION['tipo'] == 'norm')
        return true;
      return false;
    }

    public function E_404()
    {
      $error = file_get_contents('Vista/404.html');
      echo $error;
    }
  }
?>
