<?php

class AdministradorModel {

  private $db;

  function __construct() {

    $this->db-> = new PDO('mysql:host=localhost;dbname=tpespecialdb;charset=utf8', 'root', '');

  }

  function getAdmin($admin) {

    $query = $this->db->prepare('select * from admin where email=?');
    $query->execute(array($usuario));

    eturn $query->fetchAll(PDO::FETCH_ASSOC);

  }
}
 ?>
