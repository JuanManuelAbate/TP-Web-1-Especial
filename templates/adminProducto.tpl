<div class="row">
  <div class="col-md-6">
    <form id="newProductForm">
      <h2 class="text-center">Nuevo Producto</h2>
      <div class="form-group">
        <label for="nombreProducto">Nombre</label>
        <input type="text" name="nombreProducto" class="form-control" id="nombreProducto" placeholder="Nombre nuevo producto">
      </div>
      <div class="form-group">
        <label for="descripcionProducto">Descripcion</label>
        <input type="text" name="descripcionProducto" class="form-control" id="descripcionProducto" placeholder="Descripcion nuevo producto">
      </div>
      <select name="categoriaProducto">
        {foreach from=$categorias item=$categoria}
          <option value={$categoria.id_categoria}>{$categoria.nombre}</option>
        {/foreach}
      </select>
      <button id="createProducto" class="btn btn-default center-block">Crear</button>
    </form>
  </div>
</div>
