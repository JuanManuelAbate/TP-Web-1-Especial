$(document).ready(function(){

  $('.deleteCategorias').click(function(){
  event.preventDefault();
  $.get( "index.php?action=categoria_eliminar",{ id_categoria: $(this).attr("data-idcategoria") }, function(data) {
  //  $('#listaCategorias').html(data);
  //  $('#categoria').val('');
  });

  });
  });
