<?php
require_once('views/LoginView.php');
require_once('models/UsuarioModel.php');
require_once('CategoriaController.php');

class LoginController {
  private $vista;
  private $modelo;

  function __construct() {
    $this->modelo = new UsuarioModel();
    $this->vista = new LoginView();
  }

  public function loguearme() {
    $usuario = $this->modelo->getUsuario($_POST['email']);
    if(!$usuario) {
      header("Location: index.php?action=login");
    }
    else if(isset($_POST['email']) && isset($_POST['pass'])){
      $email = $_POST['email'];
      $password = $_POST['pass'];
      $usuario = $this->modelo->getUsuario($email);
      if (password_verify($password, $usuario['password'])) {
        session_start();
        $_SESSION['USER'] = $email;
        header("Location: index.php");
        die();
      }
      else
       $this->vista->agregarError('Usuario o contraseña incorrectos');
    }
  }

  public function login() {
    $this->vista->mostrar();
  }

  public function checkLogin(){
    session_start();
    if(!isset($_SESSION['USER'])){
      header("Location: index.php?action=login");
      die();
    };
  }

  public function logout() {
    session_start();
    session_destroy();
    header("Location: index.php?action=login");
    die();
  }

    public function validar(){

    }
}
