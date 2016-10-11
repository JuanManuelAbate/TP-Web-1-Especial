<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Estilos propios -->
  <link rel="stylesheet" href="css/estilo.css" media="screen" title="no title">

  <title>tienda de aromas ap</title>
</head>

<body>
  <header>
    <nav id="navigationBar" class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">
            <img alt="Brand" src="images/logo.png" class="img-responsive" id="logo">
          </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navigation">
          <ul class="nav navbar-nav">

            <li class="navList" name="home"><a id="home" href="#" >Que es ap?</a></li>
            <li class="navList" name="productos"><a href="#">Categorias</a></li>
            <li class="navList" name="categorias"><a href="#">Productos</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="navList" name="adminCategorias"><a id="adminCategorias" href="#">Admin Categorias</a></li>
            <li class="navList" name="adminProductos"><a id="adminProductos" href="#">Admin Productos</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div>
    </nav>
  </header>

  <!-- Seccion principal donde se injecta contenido -->
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <section id="mainContent">
        </section>
      </div>
    </div>
  </div>

  <footer class="container">

  </footer>

  <!-- jQuery -->
  <script src="js/jquery.min.js"></script>
  <!-- bootstrap -->
  <script src="js/bootstrap.min.js"></script>
  <!-- JS propio -->
  <!-- Categoria Admin -->
  <script src="js/adminCategorias.js"></script>
  <!-- Producto Admin -->
  <script src="js/adminProducto.js"></script>
  <!-- Navegacion -->
  <script src="js/navegacion.js"></script>
</body>
</html>
