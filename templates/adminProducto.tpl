<div class="row">
  <div class="col-md-6">
    <form id="newProductForm">
      <h2 class="text-center">Nuevo Producto</h2>
      <div class="form-group">
        <label for="nombreProducto">Nombre</label>
        <input type="text" name="nombreProducto" class="form-control" id="nombreProducto" placeholder="Nombre nuevo producto" required="true">
      </div>
      <div class="form-group">
        <label for="descripcionProducto">Descripcion</label>
        <input type="text" name="descripcionProducto" class="form-control" id="descripcionProducto" placeholder="Descripcion nuevo producto" required="true">
      </div>
      <div class="form-group">
        <label for="categoriaProducto">Categoria:</label>
        <select name="categoriaProducto" id="categoriaProducto">
          {foreach from=$categorias item=$categoria}
            <option value={$categoria.id_categoria}>{$categoria.nombre}</option>
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
    <table class="table table-bordered table-responsive">
      <thead>
        <th>Id</th>
        <th>Nombre</th>
        <th>Descripcion</th>
        <th>Categoria</th>
        <th>Modificar</th>
        <th>Borrar</th>
      </thead>
      <tbody id="tableProductos">
        {foreach from=$productos item=$producto}
          <tr data-id={$producto.id_producto}>
            <td>{$producto.id_producto}</td>
            <td>{$producto.nombre}</td>
            <td>{$producto.descripcion}</td>
            <td>{$producto.nombre_categoria}</td>
            <td><button class="btn center-block updateProducto">Modificar</button></td>
            <td><button class="btn center-block deleteProducto">Borrar</button></td>
          </tr>
        {/foreach}
      </tbody>
    </table>
  </div>
</div>
