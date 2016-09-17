<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>test</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  </head>
  <body>
    <ul>
      {foreach from=$categorias item=$categoria}
        <li>{$categoria.nombre}<a class="deleteCategorias" href="#" data-idcategoria="{$categorias['id_categoria']}"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></li>
      {/foreach}
    </ul>

    <form action="index.php?action=categoria_crear" method="post">
      <input type="text" name="nombreCategoria" placeholder="Ingrese categoria">
      <input type="submit" value="Enviar">
    </form>

    <div id="listaCategorias">

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="js/categorias.js"></script>
  </body>
</html>
