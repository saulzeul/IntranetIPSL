<?php 		if (isset($this->session->userdata['logged_in'])) {
	//Declarar variables de session
		$nom_usuario = ($this->session->userdata['logged_in']['nom_usuario']);
		$pass_usuario = ($this->session->userdata['logged_in']['pass_usuario']);
    $tipo_usuario = ($this->session->userdata['logged_in']['tipo_usuario']);
		} else {
		} ?>
<!-- Barra horizontal -->
<nav class="navbar navbar-default navbar-fixed-top horizontal-navbar" role="navigation">
  <a class="navbar-brand" href="http://www.ipsl.com.mx/">
    <img id="logo-navbar" src="images/papelera.png" >
  </a>
  <div class="container-fluid horizontal-navbar-container">
    <div class="dropdown active">
      <a class="btn dropdown-toggle horizontal-navbar-dropdown" type="button" id="dropdown-navbar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
        <i class="fa fa-user-circle"></i>
      </a>
      <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-navbar">
        <li><a href="#!/perfil">Perfil</a></li>
        <li><a href="#!/perfil">Cambiar contraseña</a></li>
        <li role="separator" class="divider"></li>
        <li><a href="<?=(base_url().'login/cerrar_sesion')?>">Cerrar sesion</a></li>
      </ul>
    </div>
  </div>
</nav>
<!-- Termina barra horizontal -->
<!-- Barra vertical -->
<div class="nav-side-menu">
    <div class="brand">Brand Logo</div>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
        <div class="menu-list">
            <ul id="menu-content" class="menu-content collapse out">
                <li><a id="refresh-dash" href="#!/dash"><i class="fa fa-dashboard fa-lg"></i> Dashboard</a></li>
								<?php if ($tipo_usuario == 'rh' and 'administrador') {?>
								<li  data-toggle="collapse" data-target="#products" class="collapsed">
                  <a><i class="fa fa-user-circle fa-lg"></i> Recursos Humanos <span class="arrow"></span></a>
                </li>
	                <ul class="sub-menu collapse" id="products">
	                    <li><a id="refresh-capacitacion" href="#!/capacitacion">Capacitacion</a></li>
	                    <li><a id="refresh-avisos" href="#!/avisos">Eventos</a></li>
	                </ul>
								<?php } ?>
                <li data-toggle="collapse" data-target="#service" class="collapsed">
                  <a><i class="fa fa-folder-open fa-lg"></i> Documentacion <span class="arrow"></span></a>
                </li>
	                <ul class="sub-menu collapse" id="service">
	                  <li><a id="refresh-docSistemas" href="#!/docSistemas">Sistemas</a></li>
	                  <li>Compras</li>
	                  <li>Recursos humanos</li>
	                </ul>
								<?php if ($tipo_usuario == 'sistemas') {?>
	                <li data-toggle="collapse" data-target="#new" class="collapsed">
	                  <a><i class="fa fa-cog fa-lg"></i> Configuración <span class="arrow"></span></a>
	                </li>
		                <ul class="sub-menu collapse" id="new">
		                  <li><a id="refresh-configuracion" href="#!/configuracion">Usuarios</a></li>
		                  <li>Email</li>
		                </ul>
								<?php } ?>
            </ul>
     </div>
</div>
<!-- Vista de los menus -->
<div id="mostrar-vista" ng-view></div>
