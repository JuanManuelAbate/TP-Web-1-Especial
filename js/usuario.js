$("document").ready(function(){

  $(document).on("submit", "#registrarseForm", function(){
    event.preventDefault();
    formData = new FormData(this);
    $.ajax({
      method: "POST",
      url: "index.php?action=usuario_registrar",
      data: formData,
      contentType: false,
      cache: false,
      processData:false,
      success: function(data){
        $("#mainContent").html(data);
      }
    });
  });

});
