<?php
  require_once(dirname(__DIR__).'/libs/Smarty.class.php');

  class UsuarioView {

    private $smarty;

    function __construct() {

      $this->smarty = new Smarty();

    }

      function main($usuarioIn) {
        $tipo = 0;
        $this->smarty->assign('tipo', $tipo);
        $this->smarty->assign('usuarioIn',$usuarioIn);
        $this->smarty->display('main.tpl');
      }

    function registrarUsuarioForm() {

      $this->smarty->display('registrarse.tpl');
    }

    function mostrarMensaje($mensaje, $color){

      $this->smarty->assign("mensaje", $mensaje);
      $this->smarty->assign("color", $color);
      $this->registrarUsuarioForm();
    }

    function vistaAdm($usuarioIn, $tipo){

      $this->smarty->assign('usuarioIn',$usuarioIn);
      $this->smarty->assign('tipo',$tipo);
      $this->smarty->display("header.tpl");
    }

    function adminUsuario($usuarios) {

      $this->smarty->assign('usuarios',$usuarios);
      $this->smarty->display("adminUsuario.tpl");
    }

  }

?>
