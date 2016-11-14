<?php

class CategoriaModel {

  private $db;

  function __construct() {

    $this->db = (new DbConnector)->getDbConnection();
  }

  function getCategorias() {

    $query = $this->db->prepare("select * from categoria ORDER BY id_categoria ASC");
    $query->execute();
    return $query->fetchAll(PDO::FETCH_ASSOC);
  }

  function createCategoria($nombreCategoria) {

    try {
      $query = $this->db->prepare("insert into categoria(nombre) values(?)");
      $query->execute(array($nombreCategoria));
      $lastId = $this->db->lastInsertId();
      $query = $this->db->prepare("select * from categoria where id_categoria=?");
      $query->execute(array($lastId));
    } catch (PDOException $e) {
      return false;
    }
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
