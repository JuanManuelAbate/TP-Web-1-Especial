{foreach from=$categoria item=$categori}
  <tr data-id={$categori.id_categoria}>
    <td>{$categori.id_categoria}</td>
    <td>{$categori.nombre}</td>
    <td><button class="btn center-block updateCategoria">Modificar</button></td>
    <td><button class="btn center-block deleteCategoria">Borrar</button></td>
  </tr>
{/foreach}
