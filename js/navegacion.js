  $("document").ready(function () {
    home();
    $("#logo").on("click", home);
    $("#home").on("click", home);
    $("#contacto").on("click", contacto);
    $("#categorias").on("click", categorias);
    $("#productos").on("click", productos);
    $("#adminCategorias").on("click", adminCategorias);
    $("#adminProductos").on("click", adminProductos);
  });

  function home() {
    $.ajax({
      url: "queEsAp.html",
      method: "GET",
      dataType: "html",
      success: function(data) {
        $("#mainContent").html(data);
      },
      error: function () {
        alert("Ha ocurrido un error, intente mas tarde");
      }
    });
  }

    function contacto() {
      $.ajax({
        url: "form.html",
        method: "GET",
        dataType: "html",
        success: function(data) {
          console.log("llego el form");
          $("#mainContent").html(data);
        },
        error: function () {
          alert("Ha ocurrido un error, intente mas tarde");
        }
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
