<?php
require_once('libs/Smarty.class.php');

class LoginView {

  private $smarty;

  function __construct() {

    $this->smarty = new Smarty();

  }

  function mostrar($error){
    $this->smarty->display('login.tpl');
  }

}



 ?>
