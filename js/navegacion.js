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
    $("#btncategorias").on("click", mostrarProductosRelacionados);
    $("#mainContent").html(data);
   });
};

 function productos() {
  $.get("index.php?action=productos", function(data) {
    $("#mainContent").html(data);
   });
};

function mostrarProductosRelacionados() {
  $.get("index.php",{action:producto_categoria, id_categoria: $(this).attr("data-id")}), function(data) {
    console.log(data);
    $("#mainContent").html(data);
   });
 }
