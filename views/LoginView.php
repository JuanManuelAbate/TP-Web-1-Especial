<?php
require_once('libs/Smarty.class.php');

class LoginView {

  private $smarty;

  function __construct() {

    $this->smarty = new Smarty();

  }

  function mostrarMensaje($mensaje, $color){
    $this->smarty->assign("mensaje", $mensaje);
    $this->smarty->assign("color", $mensaje);
    $this->mostrar();
  }

  function mostrar(){
    $this->smarty->display('login.tpl');
  }

}



 ?>
