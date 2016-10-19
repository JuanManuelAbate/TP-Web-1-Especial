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
            <td>{$categoria.nombre|capitalize:true}</td>
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
      <h3 class="text-center">Nueva Categoria</h3>
      <div class="form-group">

        <input type="text" name="nombreCategoria" class="form-control" id="nombreCategoria" placeholder="Nombre nueva categoria">
      </div>
      <button id="createCategoria" class="btn btn-default center-block">Crear</button>
    </form>
  </div>
  <div class="col-md-6">
    <form id="updateCategoriaForm">
      <h3 class="text-center">Modificar Categoria</h3>
      <div class="form-group">
        <input type="text" name="a" placeholder="Id categoria" class="form-control" id="idCategoria"  disabled>
      </div>
      <div class="form-group">
        <input type="text" name="b" class="form-control" id="updateNombreCategoria" placeholder="Nombre a modificar">
      </div>
      <button id="saveCategoria" class="btn btn-default center-block">Guardar</button>
    </form>
  </div>
</div>
