  $("document").ready(function () {
    home();
    $("#logo").on("click", home);
    $("#home").on("click", home);
    $("#categorias").on("click", categorias);
    $("#productos").on("click", productos);

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
    })
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
