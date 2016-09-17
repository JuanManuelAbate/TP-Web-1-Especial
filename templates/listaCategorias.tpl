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
  </body>
</html>
