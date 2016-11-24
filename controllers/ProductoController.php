<?php
  require_once('models/ProductoModel.php');
  require_once('views/ProductoView.php');

  class ProductoController {

    private $productoModel;
    private $productoView;
    private $categoriaModel;

    function __construct() {

      $this->productoModel = new ProductoModel();
      $this->productoView = new ProductoView();
      $this->categoriaModel = new categoriaModel();
    }

    function adminProducto() {

      $this->productoView->adminProducto($this->categoriaModel->getCategorias(),$this->productoModel->getProductos());
    }

    function createProducto() {

      $producto = $this->productoModel->createProducto($_POST['nombreProducto'], $_POST['descripcionProducto'], $_POST['categoriaProducto'],$_FILES['imagenesProducto']);
      $this->productoView->createProducto($producto);
    }

    function deleteProducto() {

      $this->productoModel->deleteProducto($_POST['id_producto']);
    }

    function verProductos() {

      $productos = $this->productoModel->getProductos();
      $categorias = $this->categoriaModel->getCategorias();
      $this->productoView->verProductos($productos, $categorias);
    }

    function productosPorCategoria() {

      $productosPorCat = $this->productoModel->getProductoPorCategoria($_GET['id_categoria']);
      $this->productoView->verProductoPorCategoria($productosPorCat);
    }

    function productoById() {

      session_start();
      $productos = $this->productoModel->getProductoById($_GET['id_producto']);
      $logueado= false;
      if(isset($_SESSION['USER'])){
        $logueado = true;
      }
      $this->productoView->verProductosConImg($productos, $logueado);
    }

    function updateProducto() {

      $this->productoModel->updateProducto($_POST['updateIdProducto'], $_POST['updateNombreProducto'], $_POST['updateDescripcionProducto'], $_POST['updateCategoriaProducto'], $_FILES['updateImagenesProducto']);
    }

    function adminProductoImagenes() {

      $this->productoView->adminProductoImagenes($this->productoModel->getImagenesProducto($_GET['id_producto']));
    }

    function eliminarImagen() {

      $this->productoModel->deleteImagen($_POST['id_imagen']);
    }

  }

?>
