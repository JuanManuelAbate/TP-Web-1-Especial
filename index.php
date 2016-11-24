<?php
  require_once('config/ConfigApp.php');
  require_once('controllers/CategoriaController.php');
  require_once('controllers/ProductoController.php');
  require_once('controllers/LoginController.php');
  require_once('controllers/UsuarioController.php');
  require_once('controllers/DbController.php');

  $dbController = new DbController();

  if (!$dbController->dbExists()) {
    if (isset($_POST["host"]) && isset($_POST['dbName']) && isset($_POST['user']) && isset($_POST['password'])){
      $dbController->createDatabase($_POST['host'],$_POST['dbName'],$_POST['user'],$_POST['password']);
      die();
    } else {
        $dbController->newCredentials();
        die();
    }
  }

  $loginController = new LoginController();
  $usuarioController = new UsuarioController();
  $categoriaController = new CategoriaController();
  $productoController = new ProductoController();

  if (!array_key_exists(ConfigApp::$ACTION,$_REQUEST)){
    $usuarioController->main();
    die();
  }

  switch ($_REQUEST[ConfigApp::$ACTION]) {

    case ConfigApp::$ACTION_REGISTRARSE:
      $usuarioController->registrarUsuarioForm();
      break;
    case ConfigApp::$ACTION_USUARIO_REGISTRAR:
      $usuarioController->registrar();
      break;
    case ConfigApp::$ACTION_LOGIN:
      $loginController->loguearUsuarioForm();
      break;
    case ConfigApp::$ACTION_LOGUEARME:
      $loginController->loguear();
      break;
    case ConfigApp::$ACTION_LOGOUT:
      $loginController->logout();
      break;
    case ConfigApp::$ACTION_CATEGORIA_CREAR:
      $loginController->checkLoginAdmin();
      $categoriaController->createCategoria();
      break;
    case ConfigApp::$ACTION_CATEGORIA_ELIMINAR:
      $loginController->checkLoginAdmin();
      $categoriaController->deleteCategoria();
      break;
    case ConfigApp::$ACTION_CATEGORIA_ADMIN:
      $loginController->checkLoginAdmin();
      $categoriaController->adminCategoria();
      break;
    case ConfigApp::$ACTION_CATEGORIA_MODIFICAR:
      $loginController->checkLoginAdmin();
      $categoriaController->updateCategoria();
      break;
    case ConfigApp::$ACTION_PRODUCTO_ADMIN:
      $loginController->checkLoginAdmin();
      $productoController->adminProducto();
      break;
    case ConfigApp::$ACTION_PRODUCTO_CREAR:
      $loginController->checkLoginAdmin();
      $productoController->createProducto();
      break;
    case ConfigApp::$ACTION_CATEGORIA:
      $categoriaController->verCategorias();
      break;
    case ConfigApp::$ACTION_PRODUCTO:
      $productoController->verProductos();
      break;
    case ConfigApp::$ACTION_PRODUCTO_CATEGORIA:
      $productoController->productosPorCategoria();
      break;
    case ConfigApp::$ACTION_PRODUCTO_ELIMINAR;
      $loginController->checkLoginAdmin();
      $productoController->deleteProducto();
      break;
    case ConfigApp::$ACTION_PRODUCTO_ID;
      $productoController->productoById();
      break;
    case ConfigApp::$ACTION_PRODUCTO_MODIFICAR:
      $loginController->checkLoginAdmin();
      $productoController->updateProducto();
      break;
    case ConfigApp::$ACTION_PRODUCTO_ADMIN_IMAGENES:
      $loginController->checkLoginAdmin();
      $productoController->adminProductoImagenes();
      break;
    case ConfigApp::$ACTION_PRODUCTO_IMAGEN_ELIMINAR:
      $loginController->checkLoginAdmin();
      $productoController->eliminarImagen();
      break;
    case ConfigApp::$ACTION_USUARIO_ADMIN:
      $loginController->checkLoginAdmin();
      $usuarioController->adminUsuario();
      break;
    case ConfigApp::$ACTION_USUARIO_ADMIN_CAMBIAR:
      $loginController->checkLoginAdmin();
      $usuarioController->cambiarAdmin();
      break;

    default:
      $usuarioController->main();
      break;
  }

?>
