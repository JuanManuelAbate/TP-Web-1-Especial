<div class="row">
  <div class="col-md-12 tabla">
    <table class="table table-responsive text-center">
      <thead>
        <th class="thCenter">ID</th>
        <th class="thCenter">Email</th>
        <th class="thCenter">Admin</th>
        <th class="thCenter">Cambiar</th>
      </thead>
      <tbody id="tableCategorias">
        {foreach from=$usuarios item=$usuario}
        <tr data-id={$usuario.id_usuario}>
          <td>{$usuario.id_usuario}</td>
          <td>{$usuario.email}</td>
          <td>
            {if ($usuario.tipo_usuario)}
            Si
            {else}
            No
            {/if}
          </td>
          <td><button class="btn center-block cambiarUsuarioAdmin">Seleccionar</button></td>
        </tr>
        {/foreach}
      </tbody>
    </table>
  </div>
</div>
