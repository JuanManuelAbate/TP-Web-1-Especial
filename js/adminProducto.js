$("document").ready(function(){

  $(document).on("submit", "#newProductForm", function(){
    event.preventDefault();
    formData = new FormData(this);
    $.ajax({
      method: "POST",
      url: "index.php?action=producto_crear",
      data: formData,
      contentType: false,
      cache: false,
      processData:false,
      success: function(data){
        $("#nombreProducto").val("");
        $("#descripcionProducto").val("");
        $("#imagenesProducto").val("");
        $("#tableProductos").append(data);
      }
    });
  });

  $("body").on("click", ".deleteProducto", function() {
    event.preventDefault();
    var rowToDelete = $(this).closest('tr');
    $.post("index.php?action=producto_eliminar", {id_producto: rowToDelete.attr("data-id")}, function() {
      rowToDelete.remove();
    });
  });

  $("body").on("click", ".updateProducto", function() {
    $("#idProducto").val($(this).closest('tr').children('td').eq(0).text());
    $("#updateNombreProducto").val($(this).closest('tr').children('td').eq(1).text());
    $("#updateDescripcionProducto").val($(this).closest('tr').children('td').eq(2).text());
    $("#updateCategoriaProducto").val($(this).closest('tr').children('td').eq(3).attr("data-id-categoria"));
  });

  $(document).on("submit", "#updateProductForm", function(){
    event.preventDefault();
    formData = new FormData(this);
    $.ajax({
      method: "POST",
      url: "index.php?action=producto_modificar",
      data: formData,
      contentType: false,
      cache: false,
      processData:false,
      success: function(data){
        $("#idProducto").val("");
        $("#updateNombreProducto").val("");
        $("#updateDescripcionProducto").val("");
        $("#updateCategoriaProducto").val("");
        $("#updateImagenesProducto").val("");
      }
    });
  });

  $("body").on("click", ".deleteProductoImagenes", function() {
    event.preventDefault();
    var productId = $(this).closest('tr');
    $.get("index.php?action=producto_admin_imagenes", {id_producto: productId.attr("data-id")}, function(data) {
      $("#mainContent").html(data);
    });
  });

  $("body").on("click", ".deleteProductoImagen", function() {
    event.preventDefault();
    var rowToDelete = $(this).closest('tr');
    $.post("index.php?action=producto_imagen_eliminar", {id_imagen: rowToDelete.attr("data-id")}, function() {
      rowToDelete.remove();
    });
  });

});
