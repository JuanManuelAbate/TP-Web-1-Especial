{foreach from=$categoria item=$cat}
  <tr data-id={$categori.id_categoria}>
    <td>{$cat.id_categoria}</td>
    <td>{$cat.nombre}</td>
    <td><button class="btn center-block updateCategoria">Modificar</button></td>
    <td><button class="btn center-block deleteCategoria">Borrar</button></td>
  </tr>
{/foreach}
