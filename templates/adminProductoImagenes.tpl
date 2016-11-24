<div class="row">
  <div class="col-md-12">
    <table class="table table-responsive text-center">
      <thead>
        <th class="thCenter">Id</th>
        <th class="thCenter">Imagen</th>
        <th class="thCenter">Borrar</th>
      </thead>
    <tbody id="tableProductoImagenes">
      {foreach from=$imagenes item=$imagen}
      <tr data-id={$imagen.id_imagen}>
        <td>{$imagen.id_imagen}</td>
        <td><img src={$imagen.path} class="imagenProductoAdmin"/></td>
        <td><button class="btn center-block deleteProductoImagen"><span class="glyphicon glyphicon-trash" aria-hidden="true"></button></td>
      </tr>
      {/foreach}
     </tbody>
   </table>
 </div>
</div>
