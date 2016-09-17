<?php
  require ('config/ConfigApp.php');
  require('controllers/CategoriaController.php');

  $categoriaController = new CategoriaController();

  if (!array_key_exists(ConfigApp::$ACTION,$_REQUEST)) {
    $categoriaController->getCategorias();
    die();
  }

  switch ($_REQUEST[ConfigApp::$ACTION]) {
    case ConfigApp::$ACTION_CATEGORIA_CREAR:
      $categoriaController->createCategoria();
      break;
      case ConfigApp::$ACTION_CATEGORIA_ELIMINAR:
          $categoriaController->deleteCategoria();
        break;

    default:
      $categoriaController->getCategorias();
      break;
  }

?>
