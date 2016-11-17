<?php
require_once('Libs/Smarty.class.php');


class UsuarioView {

  private $smarty;
  private $verif;

  function __construct() {
    $this->smarty = new Smarty();

  }

  function registrarUsuarioForm() {
    $this->smarty->display('registrarse.tpl');
  }

  function mostrarMensaje($mensaje, $color){
    $this->smarty->assign("mensaje", $mensaje);
    $this->smarty->assign("color", $mensaje);
    $this->registrarUsuarioForm();
  }

  function iniciarVistaUsuario($verif,$tipo){
    $this->smarty->assign('verif',$verif);
    $this->smarty->assign('tipo',$tipo);
    $this->smarty->display("main.tpl");

  }
}


 ?>
