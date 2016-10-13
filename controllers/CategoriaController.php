<?php
require_once('models/CategoriaModel.php');
require_once('views/CategoriaView.php');

class CategoriaController {

  private $categoriaModel;
  private $categoriaView;
  private $productoModel;

  function __construct() {
    $this->categoriaModel = new CategoriaModel();
    $this->categoriaView = new CategoriaView();
    $this->productoModel = new ProductoModel();
  }

  function getCategorias() {
    $categorias = $this->categoriaModel->getCategorias();
    $this->categoriaView->showCategorias($categorias);
  }

  function createCategoria() {
    $categoria = $this->categoriaModel->createCategoria($_POST['nombreCategoria']);
    $this->categoriaView->createCategoria($categoria);
  }

  function deleteCategoria(){
    $this->categoriaModel->deleteCategoria($_POST['id_categoria']);
  }

  function adminCategoria() {
    $categorias = $this->categoriaModel->getCategorias();
    $this->categoriaView->adminCategoria($categorias);
  }

  function updateCategoria() {
    $this->categoriaModel->updateCategoria($_POST['a'],$_POST['b']);
  }

  function verCategorias() {
    $categorias = $this->categoriaModel->getCategorias();
    $this->categoriaView->verCategorias($categorias);
  }

  function verCategoriasConProductos() {
    
  }

  //MOMENTANEO, LUEGO VER COMO RESOLVER!!!
  function main() {
    $this->categoriaView->main();
  }
}

?>
