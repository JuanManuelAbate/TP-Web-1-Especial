<?php
  require_once('libs/Smarty.class.php');

  class ProductoView {

    private $smarty;

    function __construct() {

      $this->smarty = new Smarty();
    }

    function adminProducto($categorias,$productos) {

      $this->smarty->assign('categorias',$categorias);
      $this->smarty->assign('productos',$productos);
      $this->smarty->display('adminProducto.tpl');
    }

    function createProducto($producto) {

      $this->smarty->assign('productos',$producto);
      $this->smarty->display('newProducto.tpl');
    }

    function verProductos($productos,$categorias) {

      $this->smarty->assign('categorias',$categorias);
      $this->smarty->assign('productos',$productos);
      $this->smarty->display('productos.tpl');
    }

    function verProductoPorCategoria($productos) {

      $this->smarty->assign('productos',$productos);
      $this->smarty->display('listaProductos.tpl');
    }

    function verProductosConImg($productos,$logueado) {
      $this->smarty->assign('logueado',$logueado);
      $this->smarty->assign('productos',$productos);
      $this->smarty->display('detalleProductos.tpl');
    }

    function adminProductoImagenes($imagenesProducto) {

      $this->smarty->assign('imagenes', $imagenesProducto);
      $this->smarty->display('adminProductoImagenes.tpl');
    }

  }

?>
