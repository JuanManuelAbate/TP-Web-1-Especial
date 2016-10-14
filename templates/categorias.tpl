<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      {foreach from=$categorias item=$categoria}
      <div class="col-md-6 categorias">
        <a class="btn btn-default" id="btnCategoria" href="#" role="button" data-id={$categoria.id_categoria}>{$categoria.nombre}</a>
      </div>
      {/foreach}
    </div>
  </div>
</div>
