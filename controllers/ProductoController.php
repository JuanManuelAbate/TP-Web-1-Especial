<?php
require_once('models/ProductoModel.php');
require_once('views/ProductoView.php');

class ProductoController {

  private $productoModel;
  private $productoView;
  private $categoriaModel;

  function __construct() {
    $this->productoModel = new ProductoModel();
    $this->productoView = new ProductoView();
    $this->categoriaModel = new categoriaModel();
  }

  function adminProducto() {
    $this->productoView->adminProducto($this->categoriaModel->getCategorias());
  }

  function createProducto() {
    $this->productoModel->createProducto($_POST['nombreProducto'], $_POST['descripcionProducto'], $_POST['categoriaProducto'],$_FILES['imagenesProducto']);
  }

  function verProductos() {
    $productos = $this->productoModel->getProductos();
    $this->productoView->verProductos($productos);
  }

  function productosConCategoria() {
    $productos = $this->productoModel->getProductos();
    $this->productoModel->getProductoConCategoria($productos['fk_id_categoria']);
  }

}
?>
