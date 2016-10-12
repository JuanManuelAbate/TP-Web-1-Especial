<?php
require_once('libs/Smarty.class.php');

class ProductoView {

  private $smarty;

  function __construct() {
    $this->smarty = new Smarty();
  }

  function adminProducto($categorias) {
    $this->smarty->assign('categorias', $categorias);
    $this->smarty->display('adminProducto.tpl');
  }

  function verProductos($productos,$categorias) {
    $this->smarty->assign('productos', $productos);
    $this->smarty->assign('categorias', $categorias);
    $this->smarty->display('productos.tpl');
  }

}

?>
