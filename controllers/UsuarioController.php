<?php
require_once('views/UsuarioView.php');

class UsuarioController{

  private $vistaPrincipal;

  function __construct()  {

    $this->vistaPrincipal = new UsuarioView();

  }

  function main() {
    $this->vistaPrincipal->main();
  }


}


 ?>
