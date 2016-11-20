<?php

class ProductoModel {

  private $db;

  function __construct() {

    $this->db = (new DbConnector)->getDbConnection();
  }

  function getProductos() {

    $query = $this->db->prepare("select producto.*, categoria.nombre as nombre_categoria from producto inner join categoria on producto.fk_id_categoria = categoria.id_categoria ORDER BY id_producto  ASC");
    $query->execute();
    $productos = $query->fetchAll(PDO::FETCH_ASSOC);
    foreach ($productos as $key => $producto) {
      $productos[$key]['imagenes'] = $this->getImagenesProducto($producto['id_producto']);
    }
    return $productos;
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

    $query = $this->db->prepare("select producto.*, categoria.nombre as nombre_categoria from producto inner join categoria on producto.fk_id_categoria = categoria.id_categoria where id_producto=? ORDER BY categoria.nombre ASC");
    $query->execute(array($id_producto));
    return $query->fetchAll(PDO::FETCH_ASSOC);
  }

  function deleteProducto($idProducto) {

    $query = $this->db->prepare("select * from imagen where fk_id_producto=?");
    $query->execute(array($idProducto));
    $imagenesProducto = $query->fetchAll(PDO::FETCH_ASSOC);
    foreach ($imagenesProducto as $imagen) {
      unlink($imagen[path]);
    }

    $query = $this->db->prepare("delete from imagen where fk_id_producto=?");
    $query->execute(array($idProducto));
    $query = $this->db->prepare("delete from producto where id_producto=?");
    $query->execute(array($idProducto));
  }

  function updateProducto($idProducto, $nombreProducto, $descripcionProducto, $categoriaProducto, $imagenesProducto) {

    $query = $this->db->prepare("update producto set nombre=?, descripcion=?, fk_id_categoria=? where id_producto=?");
    $query->execute(array($nombreProducto, $descripcionProducto, $categoriaProducto, $idProducto));

    for ($i=0 ; $i < count($imagenesProducto['size']) ; $i++ ) {
      $path="images/productos/".uniqid()."_".$imagenesProducto['name'][$i];
      move_uploaded_file($imagenesProducto['tmp_name'][$i], $path);
      $insertImagen = $this->db->prepare("insert into imagen(path,fk_id_producto) VALUES(?,?)");
      $insertImagen->execute(array($path,$idProducto));
    }

  }

  function getProductoPorCategoria($fk_id_categoria) {
    $query = $this->db->prepare("select producto.*, categoria.nombre as nombre_categoria from producto inner join categoria on producto.fk_id_categoria = categoria.id_categoria where producto.fk_id_categoria=? ORDER BY categoria.nombre ASC");
    $query->execute(array($fk_id_categoria));
    return  $query->fetchAll(PDO::FETCH_ASSOC);

  }

  function getProductoById($id_producto) {

    $query = $this->db->prepare("select producto.*, categoria.nombre as nombre_categoria from producto inner join categoria on producto.fk_id_categoria = categoria.id_categoria where producto.id_producto=? ORDER BY categoria.nombre ASC");
    $query->execute(array($id_producto));
    $productos = $query->fetchAll(PDO::FETCH_ASSOC);
    foreach ($productos as $key => $producto) {
      $productos[$key]['imagenes'] = $this->getImagenesProducto($producto['id_producto']);
    }
    return $productos;
  }

  function getImagenesProducto($id_producto) {
    $query = $this->db->prepare( "select * from imagen where fk_id_producto=?");
    $query->execute(array($id_producto));
    return $query->fetchAll(PDO::FETCH_ASSOC);
  }

  function deleteImagen($idImagen) {

    $query = $this->db->prepare("select * from imagen where id_imagen=?");
    $query->execute(array($idImagen));
    $imagen = $query->fetchAll(PDO::FETCH_ASSOC);
    unlink($imagen[0][path]);

    $query = $this->db->prepare("delete from imagen where id_imagen=?");
    $query->execute(array($idImagen));
  }

}

?>
