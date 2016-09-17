<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>test</title>
  </head>
  <body>
    <ul>
      {foreach from=$categorias item=$categoria}
        <li>{$categoria.nombre}</li>
      {/foreach}
    </ul>
    <form action="index.php?action=categoria_crear" method="post">
      <input type="text" name="nombreCategoria" placeholder="Ingrese categoria">
      <input type="submit" value="Enviar">
    </form>
  </body>
</html>
