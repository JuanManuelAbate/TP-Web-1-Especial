{if isset($mensaje)}
  <div class="alert alert-{$color}" role="alert">{$mensaje}</div>
{/if}
<div class="row">
  <div class="col-md-6">
    <h3 class="omb_authTitle">Registrate en tienda de aromas ap</h3>
    <div class="row omb_row-sm-offset-3">
      <div class="col-md-8">
        <form class="omb_loginForm" id="registrarseForm">
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-user"></i></span>
            <input type="text" class="form-control" name="email" placeholder="email@ejemplo.com">
          </div>
          <span class="help-block"></span>
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
            <input  type="password" class="form-control" name="pass" placeholder="Password">
          </div>
          <span class="help-block"></span>
        <input type="submit" class="btn btn-default center-block bold">
        </form>
      </div>
    </div>
  </div>
</div>
