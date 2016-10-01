$("document").ready(function () {
  render();
  $("#logo").on("click", render);
  $("#home").on("click", render);
});

function render() {
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
