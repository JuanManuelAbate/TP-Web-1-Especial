<?php
require_once('views/UsuarioView.php');
require_once('views/LoginView.php');
require_once('models/UsuarioModel.php');

class LoginController {
  private $vistaLogin;
  private $modelo;
  private $vistaPrincipal;

  function __construct() {
    $this->modelo = new UsuarioModel();
    $this->vistaLogin = new LoginView();
    $this->vistaPrincipal = new UsuarioView();
  }

  public function registrarUsuario() {
    if((isset($_REQUEST['email'])&&(isset($_REQUEST['pass'])))) {
          $usuario = $_REQUEST['email'];
          $pass = $_REQUEST['pass'];
          // falta controlar si el usuario ya existe
          $hash = password_hash($pass, PASSWORD_DEFAULT);
          $this->modelo->insertarUsuario($usuario,$hash);
          $this->vistaLogin->mostrarMensaje("Usted se ha registrado exitosamente, inicie sesion","success");
          
        }
        else {
              $this->vistaLogin->mostrarMensaje("Ha ocurrido un error","danger");
        }
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
