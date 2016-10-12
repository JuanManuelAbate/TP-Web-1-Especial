<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <table class="table table-responsive text-center">
      <thead>
        <th>Nombre</th>
        <th>Descripcion</th>
        <th>Categoria</th>
      </thead>
      <tbody>
        {foreach from=$productos item=$producto}
        <tr>
          <td>{$producto.nombre}</td>
          <td>{$producto.descripcion}</td>
          <td>{$producto.fk_id_categoria}</td>
        </tr>
      {/foreach}
      </tbody>
    </table>
    </div>
  </div>
</div>
