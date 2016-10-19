<div class="container-fluid">
<div class="row">
  <div class="col-md-6 col-md-offset-3 nombreCategoria">

      {if $productos[0]['nombre_categoria']===null}
      {$productos[0]['nombre_categoria']="sin productos"}
      {else}
      {$productos[0]['nombre_categoria']}
      {/if}
    </div>
      <div class="col-md-12 productos">
    <table class="table table-responsive">
      <thead>
        <th></th>
        <th class="thLeft">PRODUCTOS</th>
      </thead>
      <tbody>
        {foreach from=$productos item=$producto}
        <tr>
          <td class="text-center"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span></td>
          <td><a href="#" class="verItem" data-id={$producto.id_producto}>{$producto.nombre|capitalize:true}</a></td>
        </tr>
        {/foreach}
      </tbody>
    </table>
  </div>
</div>
</div>
