<?php
  require_once('../dataBase/DbConnector.php');

  class ComentarioModel {

    private $db;

    function __construct() {

      $this->db = (new DbConnector)->getDbConnection();
    }

    function getComentariosPorProducto($fk_id_producto) {

      $query = $this->db->prepare("select * from comentario where fk_id_producto=?");
      $query->execute(array($fk_id_producto));
      return  $query->fetchAll(PDO::FETCH_ASSOC);
    }

    function eliminarComentario($idComentario) {

      $query = $this->db->prepare("delete from comentario where id_comentario=?");
      $query->execute(array($idComentario));
      return  $query->rowCount();
    }

    function createComentario($comentario,$puntaje,$fk_id_producto) {

      $query = $this->db->prepare("insert into comentario (comentario,puntaje,fk_id_producto) values (?,?,?)");
      $query->execute(array($comentario,$puntaje,$fk_id_producto));
      return  $this->db->lastInsertId();
    }

    function getComentario($idComentario) {

      $query = $this->db->prepare("select * from comentario where id_comentario=?");
      $query->execute(array($idComentario));
      return  $query->fetchAll(PDO::FETCH_ASSOC);
    }

  }

?>
