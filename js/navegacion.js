  $("document").ready(function () {
    home();
    $("#logo").on("click", home);
    $("#home").on("click", home);
    $("#contacto").on("click", contacto);
    $("#categorias").on("click", categorias);
    $("#productos").on("click", productos);
    $("#adminCategorias").on("click", adminCategorias);
    $("#adminProductos").on("click", adminProductos);
    $("#login").on("click", login);
    $("#registrarse").on("click", registrarse);
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

  function home() {
    $.get("index.php?action=home", function(data) {
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
    $.get("index.php", {
      action: "producto_id",
      id_producto: $(this).attr("data-id")
    }).done(function (data) {
      console.log(data)
      $("#mainContent").html(data);
    });
  }
