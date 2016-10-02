<?php
  require ('config/ConfigApp.php');
  require('controllers/CategoriaController.php');

  $categoriaController = new CategoriaController();

  if (!array_key_exists(ConfigApp::$ACTION,$_REQUEST)) {
    $categoriaController->main();
    die();
  }

  switch ($_REQUEST[ConfigApp::$ACTION]) {
    case ConfigApp::$ACTION_CATEGORIA_CREAR:
      $categoriaController->createCategoria();
      break;
    case ConfigApp::$ACTION_CATEGORIA_ELIMINAR:
      $categoriaController->deleteCategoria();
      break;
    case ConfigApp::$ACTION_CATEGORIA_ADMIN:
      $categoriaController->adminCategoria();
      break;
    case ConfigApp::$ACTION_CATEGORIA_MODIFICAR:
      $categoriaController->updateCategoria();
      break;
    default:
      $categoriaController->main();
      break;
  }

?>
