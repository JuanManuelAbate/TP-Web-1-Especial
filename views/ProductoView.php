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

  function verProductos($productos) {
    $this->smarty->assign('productos', $productos);
    $this->smarty->display('productos.tpl');
  }

  function verProductoConCategorias($productos) {
    $this->smarty->assign('productos', $productos);
    $this->smarty->display('productosConCategorias.tpl');
  }

}

?>
