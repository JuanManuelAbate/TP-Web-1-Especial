{foreach from=$productos item=$producto}
  <tr data-id={$producto.id_producto}>
    <td>{$producto.id_producto}</td>
    <td>{$producto.nombre}</td>
    <td>{$producto.descripcion}</td>
    <td>{$producto.nombre_categoria}</td>
    <td><button class="btn center-block updateProducto"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></button></td>
    <td><button class="btn center-block deleteProducto"><span class="glyphicon glyphicon-trash" aria-hidden="true"></button></td>
  </tr>
{/foreach}
