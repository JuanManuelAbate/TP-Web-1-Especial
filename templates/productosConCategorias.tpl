<div class="container-fluid">
  <div class="row">
    <div class="col-md-12 productos">
      <ul id="tablaProductos">
        {foreach from=$productos item=$producto}
          <li>{$producto.nombre}</li>
          <li>{$producto.fk_id_categoria}</li>
        {/foreach}
      </ul>
    </div>
  </div>
</div>
