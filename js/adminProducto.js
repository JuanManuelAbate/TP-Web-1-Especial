$("document").ready(function(){

  $("#adminProductos").click(function() {
    $.get("index.php?action=producto_admin", function(data) {
      $("#mainContent").html(data);
    });
  });

});
