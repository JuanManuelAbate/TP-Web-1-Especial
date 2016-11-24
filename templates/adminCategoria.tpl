<div class="row errorAdmin" hidden>
  <div class="col-md-12 bg-danger">
    <h1>Error: Nombre categoria duplicado</h1>
  </div>
</div>
<div class="row">
  <div class="col-md-6">
    <form id="newCategoriaForm">
      <h2 class="text-center">Nueva Categoria</h2>
      <div class="form-group">
        <input type="text" name="nombreCategoria" class="form-control" id="nombreCategoria" placeholder="Nombre nueva categoria">
      </div>
      <button id="createCategoria" class="btn btn-default center-block bold">Crear</button>
    </form>
  </div>
  <div class="col-md-6">
    <form id="updateCategoriaForm">
      <h2 class="text-center">Modificar Categoria</h2>
      <div class="form-group" hidden>
        <input type="text" name="id_categoria_update" placeholder="Id categoria" class="form-control" id="idCategoria">
      </div>
      <div class="form-group">
        <input type="text" name="nombre_categoria_update" class="form-control" id="updateNombreCategoria" placeholder="Nombre a modificar">
      </div>
      <button id="saveCategoria" class="btn btn-default center-block bold">Guardar</button>
    </form>
  </div>
</div>
<div class="row">
  <div class="col-md-12 tabla">
    <table class="table table-responsive text-center">
      <thead>
        <th class="text-center">ID</th>
        <th class="text-center">Categoria</th>
        <th class="text-center">Editar</th>
        <th class="text-center">Borrar</th>
      </thead>
      <tbody id="tableCategorias">
        {foreach from=$categorias item=$categoria}
        <tr data-id={$categoria.id_categoria}>
          <td>{$categoria.id_categoria}</td>
          <td>{$categoria.nombre|capitalize:true}</td>
          <td><button class="btn center-block updateCategoria"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button></td>
          <td><button class="btn center-block deleteCategoria"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
        </tr>
        {/foreach}
      </tbody>
    </table>
  </div>
</div>
