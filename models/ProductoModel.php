<?php

class ProductoModel {

  private $db;

  function __construct() {

    $this->db = new PDO('mysql:host=localhost;dbname=tpespecialdb;charset=utf8', 'root', '');
  }

  function getProductos() {

    $query = $this->db->prepare("select * from producto");
    $query->execute();
    return $query->fetchAll(PDO::FETCH_ASSOC);
  }

  function createProducto($nombreProducto, $descripcionProducto, $fk_id_categoria, $imagenesProducto) {

    $query = $this->db->prepare("insert into producto(nombre, descripcion, fk_id_categoria)  values(?,?,?)");
    $query->execute(array($nombreProducto, $descripcionProducto, $fk_id_categoria));
    $id_producto = $this->db->lastInsertId();

    for ($i=0 ; $i < count($imagenesProducto['size']) ; $i++ ) {
      $path="images/productos/".uniqid()."_".$imagenesProducto['name'][$i];
      move_uploaded_file($imagenesProducto['tmp_name'][$i], $path);
      $insertImagen = $this->db->prepare("insert into imagen(path,fk_id_producto) VALUES(?,?)");
      $insertImagen->execute(array($path,$id_producto));
    }
  }

  function deleteProducto($idProducto) {

    $query = $this->db->prepare("delete from producto where id_producto=?");
    $query->execute(array($idProducto));
  }

  function updateProducto($idProducto, $nombreProducto) {

    $query = $this->db->prepare("update producto set nombre=? where id_producto=?");
    $query->execute(array($nombreProducto, $idProducto));
  }

  function getProductoConCategoria($fk_id_categoria) {
    $query = $this->db->prepare("select * from producto where fk_id_categoria=?");
    $query->execute(array($fk_id_categoria));
    return $query->fetchAll(PDO::FETCH_ASSOC);
  }

}

?>
