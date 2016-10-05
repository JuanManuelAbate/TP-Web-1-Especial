<?php
require_once('libs/Smarty.class.php');

class CategoriaView {

  private $smarty;

  function __construct() {
    $this->smarty = new Smarty();
  }

  function showCategorias($categorias){
    $this->smarty->assign('categorias',$categorias);
    $this->smarty->display('listaCategorias.tpl');
  }

  function adminCategoria($categorias) {
    $this->smarty->assign('categorias',$categorias);
    $this->smarty->display('adminCategoria.tpl');
  }

  function createCategoria($categoria) {
    $this->smarty->assign('categoria', $categoria);
    $this->smarty->display('newCategoria.tpl');
  }

  //MOMENTANEO, LUEGO VER COMO RESOLVER!!!
  function main() {
    $this->smarty->display('main.tpl');
  }

}

?>
