<?php

class UsuarioModel {

  private $db;

  function __construct() {

    $this->db = new PDO('mysql:host=localhost;dbname=tpespecialdb;charset=utf8', 'root', '');
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
