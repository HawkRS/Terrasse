<?php
  class ctrlEstandar
  {
    public function iniciarSesion($idUsr,$clave)
    {
      $_SESSION['idUsr'] = $idUsr;
      $_SESSION['clave'] = $clave;
      $_SESSION['usuario'] = $usuario;
      return true;
    }

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
  }
?>
