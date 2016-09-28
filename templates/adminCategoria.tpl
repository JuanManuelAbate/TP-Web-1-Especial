<table>
  <thead>
    <th>Id</th>
    <th>Nombre</th>
  </thead>
  <tbody id="tableCategorias">
    {foreach from=$categorias item=$categoria}
      <tr>
        <td>{$categoria.id_categoria}</td>
        <td>{$categoria.nombre}</td>
      </tr>
    {/foreach}
  </tbody>
</table>

<form id="newCategoriaForm">
  <input type="text" name="nombreCategoria">
  <input id="createCategoria" type="submit">
</form>
