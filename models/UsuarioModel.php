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

    function getUsuarios() {

      $query = $this->db->prepare('select * from usuario');
      $query->execute(array());
      return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    function insertarUsuario($email,$hash) {
      $query = $this->db->prepare("INSERT INTO usuario(email,password) VALUES (?,?)");
      $query->execute(array($email,$hash));
    }

    function cambiarAdmin($idUsuario) {

      $query = $this->db->prepare("UPDATE usuario SET tipo_usuario = NOT tipo_usuario where id_usuario =?");
      $query->execute(array($idUsuario));
      $query = $this->db->prepare("SELECT * FROM usuario WHERE id_usuario=?");
      $query->execute(array($idUsuario));
      return $query->fetch(PDO::FETCH_ASSOC);
    }

  }

?>
