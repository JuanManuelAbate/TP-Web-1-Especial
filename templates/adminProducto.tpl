<div class="row">
  <div class="col-md-6">
    <form id="newProductForm">
      <h2 class="text-center">Nuevo Producto</h2>
      <div class="form-group">
        <input type="text" name="nombreProducto" class="form-control" id="nombreProducto" placeholder="Nombre nuevo producto" required="true">
      </div>
      <div class="form-group">
        <input type="text" name="descripcionProducto" class="form-control" id="descripcionProducto" placeholder="Descripcion nuevo producto" required="true">
      </div>
      <div class="form-group">
        <label for="categoriaProducto">Categoria:</label>
        <select name="categoriaProducto" id="categoriaProducto">
          {foreach from=$categorias item=$categoria}
            <option value={$categoria.id_categoria}>{$categoria.nombre|capitalize:true}</option>
          {/foreach}
        </select>
      </div>
      <div class="form-group">
        <label for="imagenesProducto">Imagenes del producto</label>
        <input type="file" name="imagenesProducto[]" id="imagenesProducto" multiple>
      </div>
      <input type="submit" class="btn btn-default center-block">
    </form>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <table class="table table-responsive text-center">
      <thead>
        <th class="thCenter">ID</th>
        <th class="thCenter">Nombre</th>
        <th class="thCenter">Descripcion</th>
        <th class="thCenter" >Categoria</th>
        <th class="thCenter">Modificar</th>
        <th class="thCenter">Borrar</th>
      </thead>
      <tbody id="tableProductos">
        {foreach from=$productos item=$producto}
          <tr data-id={$producto.id_producto}>
            <td>{$producto.id_producto}</td>
            <td>{$producto.nombre|capitalize:true}</td>
            <td>{$producto.descripcion}</td>
            <td>{$producto.nombre_categoria|capitalize:true}</td>
            <td><button class="btn center-block updateProducto"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></button></td>
            <td><button class="btn center-block deleteProducto"><span class="glyphicon glyphicon-trash" aria-hidden="true"></button></td>
          </tr>
        {/foreach}
      </tbody>
    </table>
  </div>
</div>
