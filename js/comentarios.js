$("document").ready(function(){

  $(document).on("submit", "#comentarioForm", function(){
    event.preventDefault();
    var comentario = {
      comentario: $("#comentario").val(),
      puntaje: $("#puntaje").val(),
      id_producto: $(this).attr("data-id")
    };
    $.ajax({
      url: "api/comentario",
      method: "POST",
      dataType: 'JSON',
      data: comentario,
      success: function(data){
        console.log(data);
        $.ajax({
          url: 'js/templates/tablaComentarios.mst',
          success: function(templateReceived) {
            var rendered = Mustache.render(templateReceived,{comentarios : data});
            $("#tablaComentarios").append(rendered);
          }
        });
      },
      error:function(jqxml, status, errorThrown){
        console.log(errorThrown);
      }
    });
  });

});
