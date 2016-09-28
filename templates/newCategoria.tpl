{foreach from=$categoria item=$categori}
  <tr>
    <td>{$categori.id_categoria}</td>
    <td>{$categori.nombre}</td>
  </tr>
{/foreach}
