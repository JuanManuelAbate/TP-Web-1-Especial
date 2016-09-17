<?php
require('libs/Smarty.class.php');

class CategoriaView {

  private $smarty;

  function __construct() {
    $this->smarty = new Smarty();
  }

  function showCategorias($categorias){
    $this->smarty->assign('categorias',$categorias);
    $this->smarty->display('listaCategorias.tpl');
  }

}

?>
