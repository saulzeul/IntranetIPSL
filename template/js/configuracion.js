//Añadir usuario
$(document).ready(function() {
  $('#crear_usuario').click(function(event) {
    var url = "configuracion/guardar";
    $.ajax({
      type:"POST",
      url: url,
      data:$("#form_crear_usuario").serialize(),
      success:function(data){
        $.ajax({
        type: "POST",
        url: "configuracion",
        success: function(a) {
              $('#mostrar-vista').html(a);
              }
         });
      }
    })
    $('#agregaruser').modal('hide');
  });
});
