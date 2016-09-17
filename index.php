<?php
  require('controllers/CategoriaController.php');

  $categoriaController = new CategoriaController();
  $categoriaController->getCategorias();

?>
