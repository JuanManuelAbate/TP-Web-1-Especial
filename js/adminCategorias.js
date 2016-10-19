$("document").ready(function(){

  $("body").on("click", "#createCategoria", function() {
    event.preventDefault();
    $.post("index.php?action=categoria_crear", $("#newCategoriaForm").serialize(), function(data) {
      if (data === "0") {
        $(".errorAdmin").show();
      } else {
        $(".errorAdmin").hide();
        $("#tableCategorias").append(data);
        $("#nombreCategoria").val("");
      }
    });
  });

  $("body").on("click", ".deleteCategoria", function() {
    event.preventDefault();
    var rowToDelete = $(this).closest('tr');
    $.post("index.php?action=categoria_eliminar", {id_categoria: rowToDelete.attr("data-id")}, function() {
      rowToDelete.remove();
    });
  });

  $("body").on("click", ".updateCategoria", function() {
    $("#idCategoria").val($(this).closest('tr').children('td').eq(0).text());
    $("#updateNombreCategoria").val($(this).closest('tr').children('td').eq(1).text());
  });

  $("body").on("click", "#saveCategoria", function() {
    event.preventDefault();
    $.post("index.php?action=categoria_modificar", $("#updateCategoriaForm").serialize(), function() {
        $('tr').filter('[data-id="'+$("#idCategoria").val()+'"]').children('td').eq(1).text($("#updateNombreCategoria").val());
        $("#idCategoria").val("");
        $("#updateNombreCategoria").val("");
    });
  });

});
