var idInterval = null;

  $("document").ready(function () {
    home();
    $("body").on("click", "#logo", logo);
    $("body").on("click", "#home", home);
    $("body").on("click", "#contacto", contacto);
    $("body").on("click", "#categorias", categorias);
    $("body").on("click", "#productos", productos);
    $("body").on("click", "#adminCategorias", adminCategorias);
    $("body").on("click", "#adminProductos", adminProductos);
    $("body").on("click", "#adminUsuarios", adminUsuarios);
    $("body").on("click", "#login", login);
    $("body").on("click", "#logout", logout);
    $("body").on("click", "#registrarse", registrarse);

    });

    function registrarse() {
      $.get("index.php?action=registrarse", function(data) {
          $("#mainContent").html(data);
      });
    }

    function login() {
      $.get("index.php?action=login", function(data) {
        $("#mainContent").html(data);
      });
    }

    function logout() {
      $.get("index.php?action=logout", function(data) {
          $("header").html(data);
          home();
      });
    }


  function home() {
    $.get("templates/queEsAp.tpl", function(data) {
      $("#mainContent").html(data);
    });
  }

  function contacto() {
    $.get("form.html", function(data) {
      $("#mainContent").html(data);
    });
  }

  function adminProductos() {
    $.get("index.php?action=producto_admin", function(data) {
      $("#mainContent").html(data);
    });
  }

  function adminCategorias() {
    $.get("index.php?action=categoria_admin", function(data) {
      $("#mainContent").html(data);
    });
  }

  function categorias() {
    $.get("index.php?action=categorias", function(data) {
      $("#mainContent").html(data);
      $(".btnCategoria").on("click", mostrarProductosRelacionados);
    });
  };

  function productos() {
    $.get("index.php?action=productos", function(data) {
      $("#mainContent").html(data);
      $(".verItem").on("click", verItem);
    });
  };

  function mostrarProductosRelacionados() {
    $.get("index.php", {
      action: "producto_categoria",
      id_categoria: $(this).attr("data-id")
    }).done(function (data) {
      $("#mainContent").html(data);
      $(".verItem").on("click", verItem);
      $('.carousel').carousel();
    });
  }

  function verItem() {

    var idProducto = $(this).attr("data-id")
    $.get("index.php", {
      action: "producto_id",
      id_producto: $(this).attr("data-id")
    }).done(function (data) {
      $("#mainContent").html(data);
      if(idInterval){
        clearInterval(idInterval);
      }
      idInterval = setInterval(getComentariosProducto, 2000, idProducto);
    
    });
  }

  function adminUsuarios() {
    $.get("index.php?action=usuario_admin", function(data) {
      $("#mainContent").html(data);
    });
  }
