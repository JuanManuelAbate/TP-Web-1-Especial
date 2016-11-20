<div class="row">
  <div class="col-md-8">
    {if isset($mensaje)}
    <div class="alert alert-{$color}" role="alert">{$mensaje}</div>
    {/if}
    <div class="row">
      <div class="col-md-12">
        <form  id="registrarseForm">
          <h3 class="text-center">Registrate en tienda de aromas ap</h3>
          <br>
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-user"></i></span>
            <input type="email" class="form-control" name="email" placeholder="email@ejemplo.com" required>
          </div>
          <span class="help-block"></span>
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
            <input  type="password" class="form-control" name="pass" placeholder="contraseña" required>
          </div>
          <span class="help-block"></span>
          <input type="submit" class="btn btn-default center-block bold">
        </form>
      </div>
    </div>
  </div>
</div>
