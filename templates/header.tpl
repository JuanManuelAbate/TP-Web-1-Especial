
{if isset($mensaje)}
<div class="alert alert-{$color}" role="alert">{$mensaje}</div>
{/if}

<nav class="navbar navbar-default navRegister">
  <div class="container-fluid">
    <div class="navbar-header">
        <ul class="nav navbar-nav navbar-right">
          {if ($usuarioIn)}
          <li class="navList"><a href="#" id="logout">Logout</a></li>
          {else}
          <li class="navList"><a href="#" id="login">Login</a></li>
          <li class="navList"><a href="#" id="registrarse">Registrarse</a></li>
          {/if}
        </ul>
    </div><!-- /.container-fluid -->
  </div>
</nav>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><img alt="apLogo" src="images/logo.png" class="img-responsive" id="logo"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="navList"><a href="#" id="home">¿Qué es ap?</a></li>
        <li class="navList"><a href="#" id="categorias">Categorias</a></li>
        <li class="navList"><a href="#" id="productos">Productos</a></li>
        <li class="navList"><a href="#" id="contacto">Contacto</a></li>
      </ul>

      {if ($usuarioIn) && ($tipo)}
      <ul class="nav navbar-nav navbar-right">
        <li class="navList"><a href="#" id="adminProductos">Adm Productos</a></li>
        <li class="navList"><a href="#" id="adminCategorias">Adm Categorias</a></li>
        <li class="navList"><a href="#" id="adminUsuarios">Adm Usuarios</a></li>
      </ul>
      {/if}

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->

</nav>
