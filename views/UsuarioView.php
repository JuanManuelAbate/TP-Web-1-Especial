<?php
require_once('Libs/Smarty.class.php');


class UsuarioView {

  private $smarty;
  private $verif;

  function __construct() {
    $this->smarty = new Smarty();

  }

  function main() {
    $verif = false;
    $this->smarty->assign('verif',$verif);
    $this->smarty->display('main.tpl');
  }

  function iniciarVistaUsuario($verif,$tipo){
    $this->smarty->assign('verif',$verif);
    $this->smarty->assign('tipo',$tipo);
    $this->smarty->display("main.tpl");

  }
}


 ?>
