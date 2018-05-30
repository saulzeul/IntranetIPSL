<script type="text/javascript" src="template/autocompletado/jquery.easy-autocomplete.min.js"></script>
<link href="template/css/login.css" rel="stylesheet">
<link href="template/calendario/fullcalendar.css" rel="stylesheet">
<link href="template/autocompletado/easy-autocomplete.min.css" rel="stylesheet">
<link href="template/autocompletado/easy-autocomplete.themes.min.css" rel="stylesheet">
<script type="text/javascript" src="template/calendario/lib/moment.min.js"></script>
<script type="text/javascript" src="template/calendario/fullcalendar.min.js"></script>
<script type="text/javascript" src="template/calendario/locale-all.js"></script>
<script type="text/javascript" src="template/js/login.js"></script>
<!-- Barra de herramientas -->
<div class="fullscreen-bg">
    <video loop muted autoplay  class="fullscreen-bg__video">
        <source src="images/webvp9.webm" type="video/webm">
        <source src="images/web.mp4" type="video/mp4">
    </video>
</div>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" rel="home" href="#" title="IPSL">
        <img style="max-width:160px; margin-top: -7px;"src="images/papelera.png">
      </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar" style="width: 100%; height: 1px;">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#contenido1">Inicio</a></li>
          <li><a href="#contenido2">Agenda</a></li>
          <li><a href="<?=(base_url().'eventos')?>">Eventos</a></li>
        <!--Iniciar sesion -->
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="background-color: transparent;">Iniciar sesion
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <div class="col-lg-12">
                <div class="text-center"><h5><b>Iniciar sesion</b></h3></div>
                  <form id="form-login" action="<?=(base_url().'login/iniciar_sesion')?>" method="post">
                    <div class="form-group">
                        <input name="nom_usuario" id="nom_usuario"  type="text" class="form-control input-login" placeholder="Usuario">
                    </div>
                    <div class="form-group">
                        <input name="pass_usuario" id="pass_usuario" type="password" class="form-control input-login"  placeholder="Contraseña">
                    </div>
                    <div class="form-group">
                      <input type="submit" name="" class="btn btn-primary form-control submit-login" value="Iniciar sesion">
                    </div>
                    <div id="no-login" class="alert alert-danger"  style="display:none; height: 40px; padding-top:6px; margin-top: 10px;"role="alert">
                      Contraseña o usuario incorrectos
                    </div>
                  </form>
              </div>
            </ul>
          </li>
        </ul>
        <form class="navbar-form">
          <div class="form-group">
            <div class="input-group">
              <input type="text" id="round" class="form-control" placeholder="Buscar contacto">
            </div>
          </div>
        </form>
  </div>
</div>
</nav>

<!-- Contenido 1 -->
<div id="contenido1" class="container">
  <!-- Logo central -->
  <img class="logo-central" src="images/papelera.png">
</div>
<!-- Calendario Sala de Capacitacion -->

<div id="contenido2" class="container-fluid" >
  <div class="container col-md-5">
    <div class="fondo-h2">
      <center><h2>Agenda sala de capacitación</h2><center>
    </div>
  </div>
  <div id="calendar"></div>
</div>
