<?php
  require('models/CategoriaModel.php');
  require('models/ProductoModel.php');

/*
  $c = new CategoriaModel();
  $c->createCategoria("Difusor");
*/

  $p = new ProductoModel();
  $p->createProducto("Papaya y durazno","250ml", 1);


?>
