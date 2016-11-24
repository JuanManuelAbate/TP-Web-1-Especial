<div class="container-fluid">
  <div class="row">
    {if !isset($productos[0]['nombre_categoria'])}
    <div>      
    </div>
    {else}
    <div class="col-md-6 col-md-offset-3 nombreCategoria">
      {$productos[0]['nombre_categoria']}
    </div>
    {/if}

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
