//Obtener evento de la base de datos calendario_sc
$(document).ready(function() {
// ------------------------Mostrar Evento en calendario_sc --------------//
    $.post('Capacitacion/obtEventos',
     function(data){
           $('#calendar').fullCalendar({
                 locale: 'es',
                 timeFormat: 'hh:mm a',
                 dateFormat:'MM/DD/YYYY, h:mm:ss',
                 header: {
                   left: 'prev,next today',
                   center: 'title',
                   right: 'month,agendaWeek,agendaDay,listWeek'
                 },
                 businessHours: {
                   start: '07:00', // hora final
                   end: '20:00', // hora inicial
                   dow: [ 1, 2, 3, 4, 5, 6 ] // dias de semana, 0=Domingo
                 },
                 defaultDate: new Date(),
                 navLinks: true,
                 editable: true,
                 eventLimit: true,
                 events: $.parseJSON(data),

// ---------------------- Actualizar evento -------------------------//
               eventDrop: function(event, delta, revertFunc){
                   var id_evento = event.id;
                   var fecha_inicio = event.start.format();
                   var fecha_fin = event.end.format();

                   $.post("Capacitacion/actEventos",
                   {
                     id_evento:id_evento,
                     fecha_inicio:fecha_inicio,
                     fecha_fin:fecha_fin
                   },
                   function(data){
                     if (data == 1){
                       $('#men-act-evento').fadeIn(500).delay(1500).fadeOut(300);
                     }else{
                       alert('ERROR');
                     }
                 });
              },
//-----------------------Agregar evento haciendo clic en el dia ----------//
                   dayClick: function(date, jsEvent, view){
                     alert('Clicked on: ' + date.format());

                   },
//----------------------------Cambiar tamaño del evento--------------------//
                   eventResize: function(event, delta, revertFunc) {
                     var id_evento = event.id;
                     var fecha_inicio = event.start.format();
                     var fecha_fin = event.end.format();

                     $.post("Capacitacion/actEventos",
                     {
                       id_evento:id_evento,
                       fecha_inicio:fecha_inicio,
                       fecha_fin:fecha_fin
                     },
                     function(data){
                       if (data == 1){
                         $('#men-act-evento').fadeIn(500).delay(1500).fadeOut(300);
                       }else{
                         alert('ERROR');
                       }
                   });
                },
//-------------------Editar o eliminar el evento del calendario en modal------//
                   eventClick: function(event, jsEvent, view){
                     $('#idEventomodal').val(event.id);
                     $('#editnomEvento').val(event.title);
                     $('#editnomEvento').html(event.title);
                     $('#editrespEvento').val(event.description);
                     $('#editrespEvento').html(event.description);
                     $('#iniAnioMesEvento').val(event.start.format('YYYY-MM'));
                     $('#iniAnioMesEvento').html(event.start.format('YYYY-MM'));
                     $('#iniDiaEvento').val(event.start.format('DD'));
                     $('#iniDiaEvento').html(event.start.format('DD'));
                     $('#iniHoraEvento').val(event.start.format('HH:mm'));
                     $('#iniHoraEvento').html(event.start.format('HH:mm'));
                     $('#finAnioMesEvento').val(event.end.format('YYYY-MM'));
                     $('#finAnioMesEvento').html(event.end.format('YYYY-MM'));
                     $('#finDiaEvento').val(event.end.format('DD'));
                     $('#finDiaEvento').html(event.end.format('DD'));
                     $('#finHoraEvento').val(event.end.format('HH:mm'));
                     $('#finHoraEvento').html(event.end.format('HH:mm'));
                     $('#editEvento').modal('show');
                   }

//--------------------Terminan las llaves--------------------------------//
           });
     });
});
//--------------------Editar evento--------------------------------//
$('#actEventoboton').click(function() {
   var id_evento = $('#idEventomodal').val();
   var nom_evento = $('#editnomEvento').val();
   var descripcion = $('#editrespEvento').val();
   var fecha_inicio = $('#iniEvento').val();
 $.post("Capacitacion/editEventos",
   {
       id_evento: id_evento,
       nom_evento: nom_evento,
       descripcion: descripcion
   },
   function(data){
     if (data ==1){
         $.ajax({
         type: "POST",
         url: "capacitacion",
         success: function(a) {
                $('#editEvento').modal('hide');
                $('#men-act-evento').fadeIn(500).delay(1500).fadeOut(300);
                window.location.reload(true);
              }
          });
     }else{
       alert('ERROR');
     }
   })
   $('#mostrar-vista').html(a);
});

//-------------------Eliminar evento-------------------------------------//
$('#elimEventoboton').click(function(event) {
 var id_evento = $('#idEventomodal').val();
   $.post("Capacitacion/elimEventos",
 {
   id_evento:id_evento
 },
function(data){
  if (data ==1){
    $.ajax({
    type: "POST",
    url: "capacitacion",
    success: function(a) {
                $('#editEvento').modal('hide');
                $('#men-act-evento').fadeIn(500).delay(1500).fadeOut(300);
                window.location.reload(true);
          }
     });
  }else{
    alert("ERROR");
  }
  })
 $('#mostrar-vista').html(a);
});

//-----------------------input con fecha y hora ---------------------------//
$(".form_datetime").datetimepicker({
 format: 'yyyy-mm-dd hh:ii',
 language: 'es'
});

//----------------------Agregar evento a la base de datos ----------------//
$('#agreEvento').click(function(event) {
 var url = "capacitacion/agreEventos";
 $.ajax({
   type:"POST",
   url: url,
   data:$("#form_agreEventos").serialize(),
   success:function(data){
     $.ajax({
     type: "POST",
     url: "capacitacion",
     success: function(a) {
          $('#mostrar-vista').html(a);
           }
      });
   }
 })
 $('#men-act-evento').fadeIn(500).delay(1500).fadeOut(300);
});

//------------------Copiar evento a otro dia (Duplicar)---------------//
$(document).ready(function () {
    $("#iniDiaEvento").keyup(function () {
        var value = $(this).val();
        $("#finDiaEvento").val(value);
    });
});
//------------------Copiar evento a otro dia (Duplicar)---------------//
$('#dupEventoboton').click(function(event){
  var nom_evento = $('#editnomEvento').val();
  var fecha_inicio = $('#iniAnioMesEvento').val()+ '-' + $('#iniDiaEvento').val()+ ' ' + $('#iniHoraEvento').val();
  var fecha_fin = $('#finAnioMesEvento').val()+ '-' + $('#finDiaEvento').val()+ ' ' + $('#finHoraEvento').val();
  var datos = {
    nom_evento : nom_evento,
    editrespEvento : descripcion,
    fecha_inicio : fecha_inicio,
    fecha_fin : fecha_fin
  };
  var url = "capacitacion/agreEventos";
  $.ajax({
    type: "POST",
    url: url,
    data: datos,
    success:function(data){
      $.ajax({
      type: "POST",
      url: "capacitacion",
      success: function(a) {
            $('#editEvento').modal('hide');
            window.location.reload(true);
            $('#men-act-evento').fadeIn(500).delay(1500).fadeOut(300);
            }
       });
    }
  });
});
