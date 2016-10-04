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

  //MOMENTANEO, LUEGO VER COMO RESOLVER!!!
  function main() {
    $this->categoriaView->main();
  }
}

?>
