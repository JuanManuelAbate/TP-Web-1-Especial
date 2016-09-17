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

}

?>
