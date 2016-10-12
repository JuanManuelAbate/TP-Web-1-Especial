$("document").ready(function () {
  home();
  $("#logo").on("click", home);
  $("#home").on("click", home);
  $('.carousel').carousel();
  $("#categorias").on("click", categorias);
  $(".categorias").on("click", mostrarProductosRelacionados);

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

function mostrarProductosRelacionados() {


  {id_categoria: $(this).attr("data-idtarea")}

}
