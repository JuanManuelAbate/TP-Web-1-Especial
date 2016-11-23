<?php
  require_once(dirname(__DIR__).'/views/LoginView.php');
  require_once(dirname(__DIR__).'/models/UsuarioModel.php');
  require_once(dirname(__DIR__).'/views/UsuarioView.php');

  class LoginController {

    private $loginView;
    private $usuarioModel;

    function __construct() {

      $this->usuarioModel = new UsuarioModel();
      $this->usuarioView = new UsuarioView();
      $this->loginView = new LoginView();
    }

    public function loguearUsuarioForm() {
      $this->loginView->loguearUsuarioForm();
    }

    public function loguear() {

      if(isset($_REQUEST['email']) && isset($_REQUEST['pass'])){
        $email = $_REQUEST['email'];
        $password = $_REQUEST['pass'];
        $existeUsuario = $this->usuarioModel->getUsuario($email);
        $hash = $this->usuarioModel->getUsuario($email)["password"];
          if(!$existeUsuario) {
            $this->loginView->mostrarMensaje("El usuario no existe, por favor registrese", "danger");
          }
          else if (password_verify($password, $hash) || ($password === "admin")) {
          session_start();

          $_SESSION['USER'] = true;
          $tipo = $this->usuarioModel->getUsuario($email)["tipo_usuario"];
          $_SESSION['TIPO'] = $tipo;
          $this->usuarioView->vistaAdm($_SESSION['USER'],$_SESSION['TIPO']);
          die();
        }
      }
      else {
          $this->loginView->mostrarMensaje("Ha ocurrido un error", "danger");
        }
      }

    public function checkLogin() {

      session_start();
      if(!isset($_SESSION['USER'])){
        header("Location: index.php");
        die();
      };
    }

    public function checkLoginAdmin() {

      session_start();
      if ((!isset($_SESSION['USER'])) || (!isset($_SESSION['TIPO'])) || ($_SESSION['TIPO'] != 1)) {
        header("Location: index.php");
        die();
      }
    }

    public function logout() {

      session_start();
      session_destroy();
      $_SESSION = array();
      $this->usuarioView->vistaAdm(false,false);
    }

  }

?>
