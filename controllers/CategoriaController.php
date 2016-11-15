<?php
require_once('models/CategoriaModel.php');
require_once('views/CategoriaView.php');
require_once('controllers/LoginController.php');

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
    if ($categoria != false) {
        $this->categoriaView->createCategoria($categoria);
    } else {
      echo "0";
    }
  }

  function deleteCategoria(){

    $this->categoriaModel->deleteCategoria($_POST['id_categoria']);
  }

  function adminCategoria() {

    $categorias = $this->categoriaModel->getCategorias();
    $this->categoriaView->adminCategoria($categorias);
  }

  function updateCategoria() {

    $this->categoriaModel->updateCategoria($_POST['id_categoria_update'],$_POST['nombre_categoria_update']);
  }

  function verCategorias() {

    $categorias = $this->categoriaModel->getCategorias();
    $this->categoriaView->verCategorias($categorias);
  }

  function main() {

    $this->categoriaView->main();
  }

}

?>
