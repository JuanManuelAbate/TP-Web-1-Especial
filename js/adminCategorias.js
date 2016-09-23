$("document").ready(function(){

  $("#adminCategorias").click(function() {
    $.get("index.php?action=categoria_admin", function(data) {
      $("#mainContent").html(data);
    });
  });

  $("body").on("click", "#createCategoria", function() {
    event.preventDefault();
    $.post("index.php?action=categoria_crear", $("#newCategoriaForm").serialize(), function() {
      
    });
  });

});
