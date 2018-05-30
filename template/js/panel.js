// ------------------- Recursos Humanos -------------------------//
//Recargar pagina dash
$(document).ready(function() {
   $('#refresh-capacitacion').click(function(){
      $.ajax({
	    type: "POST",
	    url: "capacitacion",
	    success: function(a) {
                $('#mostrar-vista').html(a);
	    }
       });
   });
});
//Recargar pagina dash
$(document).ready(function() {
   $('#refresh-avisos').click(function(){
      $.ajax({
	    type: "POST",
	    url: "avisos",
	    success: function(a) {
                $('#mostrar-vista').html(a);
	    }
       });
   });
});
// ------------------- Sistemas ---------------------------------//
//Recargar pagina dash
$(document).ready(function() {
   $('#refresh-dash').click(function(){
      $.ajax({
	    type: "POST",
	    url: "dash",
	    success: function(a) {
                $('#mostrar-vista').html(a);
	    }
       });
   });
});
//Recargar pagina soporte
$(document).ready(function() {
   $('#refresh-processmaker').click(function(){
      $.ajax({
	    type: "POST",
	    url: "processmaker",
	    success: function(a) {
                $('#mostrar-vista').html(a);
	    }
       });
   });
});
// ------------------- Documentacion--------------------------//
//Recargar pagina Documentacion sistemas
$(document).ready(function() {
   $('#refresh-docSistemas').click(function(){
      $.ajax({
	    type: "POST",
	    url: "DocumentacionSistemas",
	    success: function(a) {
                $('#mostrar-vista').html(a);
	    }
       });
   });
});
//Recargar pagina Documentacion sistemas
$(document).ready(function() {
   $('#refresh-reqComNuevoUsuario').click(function(){
      $.ajax({
	    type: "POST",
	    url: "ReqComNuevoUsuario",
	    success: function(a) {
                $('#mostrar-vista').html(a);
	    }
       });
   });
});
//Rutas de menu
var app = angular.module("myApp", ["ngRoute"]);
app.config(function($routeProvider) {
    $routeProvider
    .when("/capacitacion", {
        templateUrl : "capacitacion"
    })
    .when("/avisos", {
        templateUrl : "avisos"
    })
    .when("/dash", {
        templateUrl : "dash"
    })
    .when("/processmaker", {
        templateUrl : "processmaker"
    })
    .when("/configuracion", {
        templateUrl : "configuracion"
    })
    .when("/perfil", {
        templateUrl : "perfil"
    })
    .when("/docSistemas", {
        templateUrl : "DocumentacionSistemas"
    })
    .when("/reqComNuevoUsuario", {
        templateUrl : "ReqComNuevoUsuario"
    })
});
//inhabilitar boton login
app.controller('hola', function($scope) {
   $scope.name = 'World';
 });

//Tooltip
$(function () {
  $('[data-toggle="tooltip"]').tooltip({
    trigger : 'hover'
  });
});
// Termina tooltip
// Empieza icono refresh
$( document ).ready( function() {
    $( "#refresh-page" ).on( "click", function( e ) {
          var $icon = $( this ).find( ".glyphicon.glyphicon-refresh" ),
          animateClass = "glyphicon-refresh-animate";
          $icon.addClass( animateClass );
          window.setTimeout( function() {
            $icon.removeClass( animateClass );
            }, 2000 );
    });
});
// Termina icono refresh
