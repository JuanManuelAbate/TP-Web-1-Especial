<?php
require('models/CategoriaModel.php');
require('views/CategoriaView.php');

class CategoriaController {

  private $categoriaModel;
  private $categoriaView;

  function __construct() {
    $this->categoriaModel = new CategoriaModel();
    $this->categoriaView = new CategoriaView();
  }

  function getCategorias() {
    $categorias = $this->categoriaModel->getCategorias();
    $this->categoriaView->showCategorias($categorias);
  }

  function createCategoria() {
    print_r($_POST);
    $this->categoriaModel->createCategoria($_POST['nombreCategoria']);
  }

  function deleteCategoria(){
    $key = $_GET['id_categoria'];
    $this->categoriaModel->deleteCategoria($key);
    $categorias = $this->categoriaModel->getCategorias();
    $this->categoriaView->showCategorias($categorias);
  }

  function adminCategoria() {
    $categorias = $this->categoriaModel->getCategorias();
    $this->categoriaView->adminCategoria($categorias);
  }

  //MOMENTANEO, LUEGO VER COMO RESOLVER!!!
  function main() {
    $this->categoriaView->main();
  }
}

?>
