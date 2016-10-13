$("document").ready(function () {
  home();
  $("#logo").on("click", home);
  $("#home").on("click", home);
  $("#categorias").on("click", categorias);
  $("#productos").on("click", productos);
  $(".categorias").on("click", mostrarProductosRelacionados);


//  $(".categorias").on("click", mostrarProductosRelacionados);

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
   });
};

 function productos() {
  $.get("index.php?action=productos", function(data) {
    $("#mainContent").html(data);
   });
};

function mostrarProductosRelacionados() {
  $.get("index.php?action=producto_categoria", {id_categoria: $(this).attr("data-id")}, function() {
    var data = productos();
    

    $("#mainContent").html(data);
   });
 }
