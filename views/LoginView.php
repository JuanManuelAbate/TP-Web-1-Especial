<?php
require_once('libs/Smarty.class.php');

class LoginView {

  private $smarty;

  function __construct() {

    $this->smarty = new Smarty();

  }

  function main() {
    $verif = false;
    $this->smarty->assign('verif',$verif);
    $this->smarty->display('main.tpl');
  }

  function mostrar(){
    $this->smarty->display('login.tpl');
  }

}



 ?>
