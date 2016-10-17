<div class="container-fluid">
  <div class="row">
    <div class="col-md-12 productos" >
    <table class="table table-responsive">
        <thead>
          <th></th>
          <th class="thLeft">Productos</th>
        </thead>
        <tbody>
          {foreach from=$productos item=$producto}
          <tr>
            <td><span class="glyphicon glyphicon-heart-empty" aria-hidden="true"></span></td>
            <td><a href="#" class="verItem" data-id={$producto.id_producto}>{$producto.nombre}</a></td>
          </tr>
          {/foreach}
        </tbody>
      </table>
    </div>
  </div>
</div>
