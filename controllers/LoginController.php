<?php
require_once('views/LoginView.php');
require_once('models/UsuarioModel.php');

class LoginController {
  private $vistaLogin;
  private $modeloUsuario;

  function __construct() {
    $this->modeloUsuario = new UsuarioModel();
    $this->vistaLogin = new LoginView();
  }

  function main() {
    $this->vistaLogin->main();
  }

   function loguearUsuario() {
    $usuario = $this->modelo->getUsuario($_REQUEST['email']);
    if(!$usuario) {
      registrarUsuario();
    }
    else if(isset($_REQUEST['email']) && isset($_REQUEST['pass'])){
      $email = $_REQUEST['email'];
      $password = $_REQUEST['pass'];
      $hash = $this->modelo->getUsuario($email)["password"];

      if (password_verify($password, $hash)) {
        session_start();
        $_SESSION['USER'] = $email;
        $tipo = $this->model->getUsuario($email)["tipo"];
        $controlUsuario = true;
        $this->vistaPrincipal->iniciarVistaUsuario($controlUsuario, $tipo);
        die();
      }
      else
       $this->vistaLogin->mostrarMensaje('Usuario o contraseña incorrectos', "danger");
    }
  }

  public function login() {
    $this->vistaLogin->mostrar();

  }

  public function checkLogin(){
    session_start();
    if(!isset($_SESSION['USER'])){
      header("Location: index.php");
      die();
    };
  }

  public function logout() {
    session_start();
    session_destroy();
    header("Location: index.php?action=login");
    die();
  }

}
