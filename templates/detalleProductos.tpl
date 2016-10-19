<div class="container-fluid">
  <div class="row">
    <div class="col-xs-6 col-md-12 productos">
      {foreach from=$productos item=$producto}
      <div class="text-center">
        {$producto.nombre_categoria|upper}
      </div>
      <div>{$producto.nombre|capitalize:true} <span class="glyphicon glyphicon-heart" aria-hidden="true"></span> 
      </div>

      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          {foreach from=$producto['imagenes'] key=index item=imagen}
          {if $index eq 0}
          <div class="item active">
            {else}
            <div class="item">
              {/if}
              <img src="{$imagen['path']}" alt="imagenProducto"  class="img-responsive">
            </div>
            {/foreach}
          </div>

          <!-- Controls -->
          <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <div class="">
          {$producto.descripcion}
        </div>

        {/foreach}
      </div>
    </div>
  </div>
