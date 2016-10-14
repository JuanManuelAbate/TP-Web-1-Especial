<div class="container-fluid">
  <div class="row">
    <div class="col-md-12 productos" >
      <h3>:::Todos los productos que tenemos para vos!</h3>
      <table class="table table-responsive" >
        <thead>
          <th></th>
          <th></th>
        </thead>
        <tbody>
          {foreach from=$productos item=$producto}
          <tr>
            <td><span class="glyphicon glyphicon-heart-empty" aria-hidden="true"></span> {$producto.nombre}</td>
            <td><button type="button" class="btn btn-default">Ver más..</button></td>

          </tr>
          {/foreach}
        </tbody>
      </table>
    </div>
  </div>
</div>
