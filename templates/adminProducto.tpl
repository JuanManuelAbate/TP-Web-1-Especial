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
        <input type="file" name="imagenesProducto[]" id="imagenesProducto" multiple required="true">
      </div>
      <input type="submit" class="btn btn-default center-block bold">
    </form>
  </div>
  <div class="col-md-6">
    <form id="updateProductForm">
      <h2 class="text-center">Modificar Producto</h2>
      <div class="form-group" hidden>
        <input type="text" name="updateIdProducto" class="form-control" id="idProducto">
      </div>
      <div class="form-group">
        <input type="text" name="updateNombreProducto" placeholder="Nombre producto modificar" class="form-control" id="updateNombreProducto" required="true">
      </div>
      <div class="form-group">
        <input type="text" name="updateDescripcionProducto" placeholder="Modificar descripcion" class="form-control" id="updateDescripcionProducto" required="true">
      </div>
      <div class="form-group">
        <label for="updateCategoriaProducto">Nueva Categoria:</label>
        <select name="updateCategoriaProducto" id="updateCategoriaProducto">
          {foreach from=$categorias item=$categoria}
            <option value={$categoria.id_categoria}>{$categoria.nombre}</option>
          {/foreach}
        </select>
      </div>
      <div class="form-group">
        <label for="updateImagenesProducto">Imagenes del producto</label>
        <input type="file" name="updateImagenesProducto[]" id="updateImagenesProducto" multiple>
      </div>
      <input type="submit" class="btn btn-default center-block bold">
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
            <td data-id-categoria={$producto.fk_id_categoria}>{$producto.nombre_categoria|capitalize:true}</td>
            <td><button class="btn center-block updateProducto"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></button></td>
            <td><button class="btn center-block deleteProducto"><span class="glyphicon glyphicon-trash" aria-hidden="true"></button></td>
          </tr>
        {/foreach}
      </tbody>
    </table>
  </div>
</div>
