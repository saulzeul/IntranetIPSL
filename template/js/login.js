//ocultar navbar si se hace scroll
$(document).ready(function() {
  var banner_height = $("#navbar").height();
  var lastScrollTop = 0;
  $(window).scroll(function() {
    var scroll = $(window).scrollTop();
    var currScrollTop = $(this).scrollTop();
    if (scroll >= banner_height && currScrollTop > lastScrollTop) {
      $("#navbar").hide();
    } else {
      $("#navbar").show();
    }
    lastScrollTop = currScrollTop;

  });

});
//Redireccionar al realizar el Login
$( document ).on("ready",main)
function main(){
  $('#form-login').submit(function(event){
    event.preventDefault();
    $.ajax({
      url:$(this).attr("action"),
      type:$(this).attr("method"),
      data:$(this).serialize(),
      success:function(resp){
        if (resp==="error") {
          $('#no-login').fadeIn(500).delay(1500).fadeOut(300);
        }else{
          //Si se va exportar al servidor cambiar a  "http://ipsl-adm-srv-02:8082/panel#!/"+ encodeURIComponent(resp);
          window.location.href = "http://ipsl-adm-dsk-21:8082/code-debian/panel#!/"+ encodeURIComponent(resp);
        }
      }
    });
  });
}
//Calendario sala de capacitacion (Solo lectura)
$(document).ready(function() {
  $.post('Login/obtEventos',
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
      editable: false,
      eventLimit: true,
      events: $.parseJSON(data)
    })
  }
)
});
//scrollspy animacion
$(document).ready(function(){
  $('body').scrollspy({target: ".navbar", offset: 50});
  $("#myNavbar a").on('click', function(event) {
    if (this.hash !== "") {
      event.preventDefault();
      var hash = this.hash;
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
        window.location.hash = hash;
      });
    }
  });
});
//Autocompletado del directorio
$(document).ready(function(){
  var options = {
  	url: "login/mostrarContactos",
  	getValue: function (element) {return "<p>" + "Nombre: " + $ (element) .prop ("contacto") + " </p> " + "<p>" + "Area: " + $ (element) .prop ("area") + " </p> " + "<p>" + "Extensión: " + $ (element) .prop ("extension") + "</p>" + "<p>" + "Email: " + $ (element) .prop ("correo") + "</p>";
},
  	list: {
  		match: {
  			enabled: true
  		},
  		maxNumberOfElements: 4
  	},
  	theme: "square"
  };
  $("#round").easyAutocomplete(options);
});
