$(document).ready(function () {
  $(".navItem").click(render);
});

function render() {
  $.ajax({
    url: "queEsAp.html",
    method: "GET",
    dataType: "html",
    success: function (data) {
      $("#mainContent").html(data);
    }
    error: function () {
      alert("Ha ocurrido un error, intente mas tarde");
    }
  })
}
