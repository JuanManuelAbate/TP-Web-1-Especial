$("document").ready(function(){

  $("#adminProductos").click(function() {
    $.get("index.php?action=producto_admin", function(data) {
      $("#mainContent").html(data);
    });
  });

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
    });
  });

});
