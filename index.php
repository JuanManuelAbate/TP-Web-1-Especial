<?php
  require_once('config/ConfigApp.php');
  require_once('controllers/CategoriaController.php');
  require_once('controllers/ProductoController.php');

  $categoriaController = new CategoriaController();
  $productoController = new ProductoController();

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
    case ConfigApp::$ACTION_PRODUCTO_ADMIN:
      $productoController->adminProducto();
      break;
    case ConfigApp::$ACTION_PRODUCTO_CREAR:
      $productoController->createProducto();
      break;
    case ConfigApp::$ACTION_CATEGORIA:
      $categoriaController->verCategorias();
      break;
    case ConfigApp::$ACTION_PRODUCTO:
      $productoController->verProductos();
      break;
    default:
      $categoriaController->main();
      break;
  }

?>
