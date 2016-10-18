<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap-theme.min.css">
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-MfvZlkHCEqatNoGiOXveE8FIwMzZg4W85qfrfIFBfYc= sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">

  <!-- Estilos propios -->
  <link rel="stylesheet" href="css/estilo.css" media="screen" title="no title">

  <title>tienda de aromas ap</title>
</head>

<body>

  {include file= "header.tpl"}

  <!-- Seccion principal donde se inyecta contenido -->
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <section id="mainContent">
        </section>
      </div>
    </div>
  </div>

    {include file= "footer.tpl"}

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
