<ul>
  {foreach from=$categorias item=$categoria}
    <li>{$categoria.nombre}</li>
  {/foreach}
  <form id="newCategoriaForm">
    <input type="text" name="nombreCategoria">
    <input id="createCategoria" type="submit">
  </form>
</ul>
