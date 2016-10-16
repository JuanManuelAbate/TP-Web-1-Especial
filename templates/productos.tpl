<div class="container-fluid">
  <div class="row">
    <div class="col-md-12 productos" >
      <h3 class="text-center">:::Todos los productos que tenemos para vos!</h3>
      <table class="table table-responsive">
        <thead>
          <th></th>
          <th class="thLeft">Producto</th>
          <th class="thLeft">Descripcion</th>
          <th class="thLeft">Categoria</th>
        </thead>
        <tbody>
          {foreach from=$productos item=$producto}
          <tr>
            <td><span class="glyphicon glyphicon-heart-empty" aria-hidden="true"></span></td>
            <td>{$producto.nombre}</td>
            <td>{$producto.descripcion}</td>
            <td class="idCat">{$producto.fk_id_categoria}</td>
          </tr>
          {/foreach}
        </tbody>
      </table>
    </div>
  </div>
</div>
