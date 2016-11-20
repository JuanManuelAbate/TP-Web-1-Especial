<?php

class UsuarioModel {

  private $db;

  function __construct() {

    $this->db = (new DbConnector)->getDbConnection();
  }

  function getUsuario($usuario) {

    $query = $this->db->prepare('select * from usuario where email=?');
    $query->execute(array($usuario));
    return $query->fetch(PDO::FETCH_ASSOC);
  }


  function insertarUsuario($email,$hash) {
    $query = $this->db->prepare("INSERT INTO usuario(email,password) VALUES (?,?)");
    $query->execute(array($email,$hash));
  }


}
