{foreach from=$productos item=$producto}
  <tr data-id={$producto.id_producto}>
    <td>{$producto.id_producto}</td>
    <td>{$producto.nombre}</td>
    <td>{$producto.descripcion}</td>
    <td data-id-categoria={$producto.fk_id_categoria}>{$producto.nombre_categoria}</td>
    <td><button class="btn center-block updateProducto"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button></td>
    <td><button class="btn center-block deleteProducto"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
  </tr>
{/foreach}
