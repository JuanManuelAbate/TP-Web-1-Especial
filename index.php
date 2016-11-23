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

// $loginController->checkLogin();

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
    case ConfigApp::$ACTION_PRODUCTO_CATEGORIA:
      $productoController->productosPorCategoria();
      break;
    case ConfigApp::$ACTION_PRODUCTO_ELIMINAR;
      $productoController->deleteProducto();
      break;
    case ConfigApp::$ACTION_PRODUCTO_ID;
      $productoController->productoById();
      break;
    case ConfigApp::$ACTION_PRODUCTO_MODIFICAR:
      $productoController->updateProducto();
      break;
    case ConfigApp::$ACTION_PRODUCTO_ADMIN_IMAGENES:
      $productoController->adminProductoImagenes();
      break;
    case ConfigApp::$ACTION_PRODUCTO_IMAGEN_ELIMINAR:
      $productoController->eliminarImagen();
      break;
    case ConfigApp::$ACTION_USUARIO_ADMIN:
      $usuarioController->adminUsuario();
      break;
    case ConfigApp::$ACTION_USUARIO_ADMIN_CAMBIAR:
      $usuarioController->cambiarAdmin();
      break;

    default:
      $usuarioController->main();
      break;
  }

?>
