<link rel="stylesheet" href="template/css/capacitacion.css">
<link href="template/calendario/fullcalendar.css" rel="stylesheet">
<link href="template/input_calendar/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
<link href="template/calendario/fullcalendar.print.css" rel="stylesheet" media='print'>
<script type="text/javascript" src="template/input_calendar/js/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript" src="template/input_calendar/js/locales/bootstrap-datetimepicker.es.js" charset="UTF-8"></script>
<script type="text/javascript" src="template/calendario/lib/moment.min.js"></script>
<script type="text/javascript" src="template/calendario/fullcalendar.min.js"></script>
<script type="text/javascript" src="template/calendario/locale-all.js"></script>
<script type="text/javascript" src="template/js/capacitacion.js"></script>
<!-- Header --->
<div class="page-header">
  <h2 class="titulomenu">Sala de capacitacion</h2>
  <div id="men-act-evento" class="alert alert-success" style="display:none;" role="alert">
    Operacion realizada correctamente
  </div>
  <div id="men-elim-evento" class="alert alert-warning" style="display:none;" role="alert">
    Operacion realizada correctamente
  </div>
</div>
<!-- Calendario Sala de capacitacion -->
<div id="calendar"></div>
<!---Formulario agregar evento --------------------------------------------->
<div class="container col-md-5">
 <form method="POST" id="form_agreEventos">
   <div class="form-group">
     <div class="col-md-12">
       <label>Descripcion del evento:</label>
       <input class="form-control" name="nom_evento" type="text" id="nuevEvento">
     </div>
     <div class="col-md-12">
       <label>Responsable:</label>
       <input class="form-control" name="descripcion" type="text" id="descripcion">
     </div>
     <div class="col-md-6">
       <label for="iniEvento">Inicia:</label>
       <input class="form-control form_datetime" name="fecha_inicio" readonly type="text"  id="iniEvento">
     </div>
     <div class="col-md-6">
       <label>Termina:</label>
       <input class="form-control form_datetime" name="fecha_fin" readonly type="text" id="termEvento">
     </div>
     <div class="col-md-12">
       <br>
       <button class="btn btn-primary" id="agreEvento">Agregar evento</button>
       <button type="reset" class="btn btn-danger" id="borrartexEvento">Borrar texto</button>
     </div>
   </div>
 </form>
</div>
<!---Modal editar o eliminar evento ----------------------------------------->
<div id="editEvento" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="editEvento" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content modalEvento">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span id="cerrarmodalEvento" aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title">Editar evento</h4>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <input type="hidden" id="idEventomodal">
            <label class="control-label" for="inputEvento">Evento:</label>
            <input type="text" class="form-control" id="editnomEvento">
            <label class="control-label" for="inputResponsable">Responsable:</label>
            <input type="text" class="form-control" id="editrespEvento">
            <label class="control-label" for="inputEvento">Copiar evento al dia:</label>
            <div class="form-inline">
              <input type="text" class="form-control" readonly id="iniAnioMesEvento">
              <input type="text" class="form-control"  id="iniDiaEvento">
              <input type="text" class="form-control" style="display:none;" readonly id="iniHoraEvento">
              <input type="text" class="form-control" style="display:none;" readonly id="finAnioMesEvento">
              <input type="text" class="form-control" style="display:none;" readonly  id="finDiaEvento">
              <input type="text" class="form-control" style="display:none;" readonly id="finHoraEvento">
            </div>
          </div>
            <button class="btn btn-danger botonrojo" id="elimEventoboton">Eliminar</button>
            <button class="btn btn-info botonprimario" id="dupEventoboton">Copiar</button>
            <button class="btn btn-primary botonprimario" id="actEventoboton">Guardar</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!--Modal 'Se actualizo correctamente evento' --------------------->
