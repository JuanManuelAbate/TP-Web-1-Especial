<header>
  {if isset($mensaje)}
  <div class="alert alert-{$color}" role="alert">{$mensaje}</div>
  {/if}

  {if (verif)}
  <nav class="navbar navbar-default navRegister">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav navbar-right">

      <li class="navList"><a href="#" id="login">Login</a></li>
      <li class="navList"><a href="#" id="registrarse">Registrarse</a></li>
      </ul>
  </div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</div>
</nav>
{/if}

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
        <ul class="nav navbar-nav navbar-right">
      {if (!verif) }

           <li class="navList"><a href="#" id="adminProductos">Administrador Productos |</a></li>
          <li class="navList"><a href="#" id="adminCategorias">Administrador Categorias |</a></li>

      {/if}

        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->

  </nav>

</header>
