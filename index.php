<?php
  require_once('config/ConfigApp.php');
  require_once('controllers/CategoriaController.php');
  require_once('controllers/ProductoController.php');
  require_once('controllers/LoginController.php');

  $loginController = new LoginController();

  if (isset($_REQUEST[ConfigApp::$ACTION]) &&
      $_REQUEST[ConfigApp::$ACTION] != ConfigApp::$ACTION_LOGIN &&
      $_REQUEST[ConfigApp::$ACTION] != ConfigApp::$ACTION_LOGUEARME)
      $loginController->checkLogin();

      $actionKey = $_REQUEST[ConfigApp::$ACTION];

  switch ($actionKey) {
    case ConfigApp::$ACTION_LOGIN:
      $loginController->login();
      break;
    case ConfigApp::$ACTION_LOGUEARME:
      $loginController->loguearme();
      break;
    case ConfigApp::$ACTION_LOGOUT:
      $loginController->logout();
      break;
    case ConfigApp::$ACTION_CATEGORIA_CREAR:
      $categoriaController = new CategoriaController();
      $categoriaController->createCategoria();
      break;
    case ConfigApp::$ACTION_CATEGORIA_ELIMINAR:
      $categoriaController = new CategoriaController();
      $categoriaController->deleteCategoria();
      break;
    case ConfigApp::$ACTION_CATEGORIA_ADMIN:
      $categoriaController = new CategoriaController();
      $categoriaController->adminCategoria();
      break;
    case ConfigApp::$ACTION_CATEGORIA_MODIFICAR:
      $categoriaController = new CategoriaController();
      $categoriaController->updateCategoria();
      break;
    case ConfigApp::$ACTION_PRODUCTO_ADMIN:
      $productoController = new ProductoController();
      $productoController->adminProducto();
      break;
    case ConfigApp::$ACTION_PRODUCTO_CREAR:
      $productoController = new ProductoController();
      $productoController->createProducto();
      break;
    case ConfigApp::$ACTION_CATEGORIA:
      $categoriaController = new CategoriaController();
      $categoriaController->verCategorias();
      break;
    case ConfigApp::$ACTION_PRODUCTO:
      $productoController = new ProductoController();
      $productoController->verProductos();
      break;
    case ConfigApp::$ACTION_PRODUCTO_CATEGORIA:
      $productoController = new ProductoController();
      $productoController->productosPorCategoria();
      break;
    case ConfigApp::$ACTION_PRODUCTO_ELIMINAR;
      $productoController = new ProductoController();
      $productoController->deleteProducto();
      break;
    case ConfigApp::$ACTION_PRODUCTO_ID;
      $productoController = new ProductoController();
      $productoController->productoById();
      break;
    case ConfigApp::$ACTION_PRODUCTO_MODIFICAR:
      $productoController = new ProductoController();
      $productoController->updateProducto();
      break;

    default:
      $categoriaController = new CategoriaController();
      $categoriaController->main();
      break;
  }
