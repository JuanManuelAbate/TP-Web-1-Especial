<?php
require_once('views/UsuarioView.php');
require_once('models/UsuarioModel.php');

class UsuarioController{

  private $usuarioView;
  private $usuarioModel;

  function __construct()  {

    $this->usuarioView = new UsuarioView();
    $this->usuarioModel = new UsuarioModel();

  }

  function registrarUsuarioForm() {
    $this->usuarioView->registrarUsuarioForm();
  }

  public function registrar() {
    if((isset($_REQUEST['email'])&&(isset($_REQUEST['pass'])))) {
          $usuario = $_REQUEST['email'];
          $pass = $_REQUEST['pass'];
          // falta controlar si el usuario ya existe
          $hash = password_hash($pass, PASSWORD_DEFAULT);
          $this->usuarioModel->insertarUsuario($usuario,$hash);
          $this->usuarioView->mostrarMensaje("Usted se ha registrado exitosamente, inicie sesion","success");
        }
        else {
              $this->usuarioView->mostrarMensaje("Ha ocurrido un error","danger");
        }
  }


}


 ?>
