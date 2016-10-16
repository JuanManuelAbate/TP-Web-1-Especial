<div class="row">
  <div class="col-md-12 tabla">
    <table class="table table-responsive text-center">
      <thead>
        <th class="thCenter">ID</th>
        <th class="thCenter">Categoria</th>
        <th class="thCenter">Editar</th>
        <th class="thCenter">Borrar</th>
      </thead>
      <tbody id="tableCategorias">
        {foreach from=$categorias item=$categoria}
          <tr data-id={$categoria.id_categoria}>
            <td>{$categoria.id_categoria}</td>
            <td>{$categoria.nombre}</td>
            <td><button class="btn center-block updateCategoria"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button></td>
            <td><button class="btn center-block deleteCategoria"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
          </tr>
        {/foreach}
      </tbody>
    </table>
  </div>
</div>
<div class="row">
  <div class="col-md-6">
    <form id="newCategoriaForm">
      <h2 class="text-center">Nueva Categoria</h2>
      <div class="form-group">
        <label for="nombreCategoria">Nombre</label>
        <input type="text" name="nombreCategoria" class="form-control" id="nombreCategoria" placeholder="Nombre nueva categoria">
      </div>
      <button id="createCategoria" class="btn btn-default center-block">Crear</button>
    </form>
  </div>
  <div class="col-md-6">
    <form id="updateCategoriaForm">
      <h2 class="text-center">Modificar Categoria</h2>
      <div class="form-group">
        <label for="idCategoria">Id</label>
        <input type="text" name="a" class="form-control" id="idCategoria">
      </div>
      <div class="form-group">
        <label for="updateNombreCategoria">Nombre</label>
        <input type="text" name="b" class="form-control" id="updateNombreCategoria">
      </div>
      <button id="saveCategoria" class="btn btn-default center-block">Guardar</button>
    </form>
  </div>
</div>
