<?php

class CategoriaModel {

  private $db;

  function __construct() {

    $this->db = new PDO('mysql:host=localhost;dbname=tpespecialdb;charset=utf8', 'root', '');
  }

  function getCategorias() {

    $query = $this->db->prepare("select * from categoria");
    $query->execute();
    return $query->fetchAll(PDO::FETCH_ASSOC);
  }

  function createCategoria($nombreCategoria) {

    $query = $this->db->prepare("insert into categoria(nombre) values(?)");
    $query->execute(array($nombreCategoria));
    $lastId = $this->db->lastInsertId();
    $query = $this->db->prepare("select * from categoria where id_categoria=?");
    $query->execute(array($lastId));
    return $query->fetchAll(PDO::FETCH_ASSOC);
  }

  function deleteCategoria($idCategoria) {

    $query = $this->db->prepare("delete from categoria where id_categoria=?");
    $query->execute(array($idCategoria));
  }

  function updateCategoria($idCategoria, $nombreCategoria) {

    $query = $this->db->prepare("update categoria set nombre=? where id_categoria=?");
    $query->execute(array($nombreCategoria, $idCategoria));
  }

}

?>
