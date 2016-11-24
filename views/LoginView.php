<?php
  require_once(dirname(__DIR__).'/libs/Smarty.class.php');

  class LoginView {

    private $smarty;

    function __construct() {

      $this->smarty = new Smarty();
    }

    function loguearUsuarioForm() {

      $this->smarty->display('login.tpl');
    }

    function home() {

      $this->smarty->display('queEsAp.tpl');
    }

  }

?>
