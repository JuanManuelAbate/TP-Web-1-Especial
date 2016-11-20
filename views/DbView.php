<?php
  require_once('libs/Smarty.class.php');

  class DbView {

    private $smarty;

    function __construct() {
      $this->smarty = new Smarty();
    }

    function newCredentials() {

      $this->smarty->display('newCredentials.tpl');
    }

  }
?>
