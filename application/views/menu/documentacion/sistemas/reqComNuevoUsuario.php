<div class="page-header">
  <h2 class="titulomenu">Requerimientos de cómputo para nuevos usuarios</h2>
</div>
<div class="col-md-12">
  <form class="form-horizontal" action="<?=(base_url().'ReqComNuevoUsuario/generarPdf')?>" method="POST" id="form_reqComNuevoUsuario">
    <div class="form-group">
      <div class="col-md-4">
        <label>Nombre de usuario:</label>
        <input class="form-control" type="text" name="nom_user_reqComNuevoUsuario" id="nom_user_reqComNuevoUsuario">
      </div>
      <div class="col-md-2">
        <label>Fecha:</label>
        <input class="form-control" type="date" name="fecha_reqComNuevoUsuario" id="fecha_reqComNuevoUsuario">
      </div>
      <div class="col-md-2">
        <label>Numero de nomina:</label>
        <input class="form-control" type="number" name="nomina_reqComNuevoUsuario" id="nomina_reqComNuevoUsuario">
      </div>
      <div class="col-md-4">
        <label>Departamento:</label>
        <input class="form-control" type="text" name="departamento_reqComNuevoUsuario" id="departamento_reqComNuevoUsuario">
        <br>
      </div>
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Tipo de equipo:</h3>
          </div>
          <div class="panel-body">
              <div class="checkbox col-md-2">
                <label><input type="checkbox" value="">Laptop</label>
              </div>
              <div class="checkbox col-md-2">
                <label><input type="checkbox" value="">Computadora de escritorio</label>
              </div>
              <div class="checkbox col-md-2">
                <label><input type="checkbox" value="">Tablet</label>
              </div>
              <div class="checkbox col-md-2">
                <label><input type="checkbox" value="">Impresora</label>
              </div>
              <div class="checkbox col-md-2">
                <label><input type="checkbox" value="">Handheld</label>
              </div>
              <div class="checkbox col-md-2">
                <label><input type="checkbox" value="">Telefono celular</label>
              </div>
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Programas:</h3>
          </div>
          <div class="panel-body">
            <div class="checkbox col-md-1">
              <label><input type="checkbox" value="">Epicor</label>
            </div>
            <div class="checkbox col-md-1">
              <label><input type="checkbox" value="">Microsoft Office</label>
            </div>
            <div class="checkbox col-md-1">
              <label><input type="checkbox" value="">Microsoft Visio</label>
            </div>
            <div class="checkbox col-md-1">
              <label><input type="checkbox" value="">Microsoft Project</label>
            </div>
            <div class="checkbox col-md-1">
              <label><input type="checkbox" value="">Aspel COI</label>
            </div>
            <div class="checkbox col-md-1">
              <label><input type="checkbox" value="">Aspel NOI</label>
            </div>
            <div class="checkbox col-md-1">
              <label><input type="checkbox" value="">Aspel SAE</label>              
            </div>
            <div class="checkbox col-md-1">
              <label><input type="checkbox" value="">Corel</label>
            </div>
            <div class="checkbox col-md-2">
              <label><input type="checkbox" value="">Processmaker</label>
            </div>
            <div class="checkbox col-md-1">
              <label><input type="checkbox" value="">Adobe CS</label>
            </div>
            <br>
            <div class="col-md-6">
              <label class="control-label">Otros:</label>
              <input type="text" name="otrosProgramas" class="form-control">
            </div>
            <div class="checkbox col-md-2">
              <label><input type="checkbox" value="">Acceso a internet</label>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="col-md-6">
          <input type="text" name="nuevoUsuario_correoElectronico" placeholder="Correo electronico" class="form-control">
          <br>
        </div>
        <div class="col-md-6">
          <select class="form-control" id="sel1">
            <option>@eyesa.com.mx</option>
            <option>@ipsl.com.mx</option>
            <option>@igsl.com.mx</option>
          </select>
        </div>
      </div>
      <br>
      <div class="col-md-4">
        <div class="input-group">
          <span class="input-group-addon" id="basic-addon3">Ubicacion</span>
          <input type="text" class="form-control" id="basic-url">
        </div>
      </div>
      <br>
      <div class="col-md-2">
        <button type="submit" class="btn btn-primary">
          Imprimir requerimiento
        </button>
      </div>
    </div>
  </form>
</div>
