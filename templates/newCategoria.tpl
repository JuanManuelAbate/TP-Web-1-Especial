{foreach from=$categoria item=$cat}
  <tr data-id={$cat.id_categoria}>
    <td>{$cat.id_categoria}</td>
    <td>{$cat.nombre}</td>
    <td><button class="btn center-block updateCategoria"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button></td>
    <td><button class="btn center-block deleteCategoria"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
  </tr>
{/foreach}
