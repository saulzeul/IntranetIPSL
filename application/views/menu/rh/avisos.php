<script type="text/javascript" src="template/image_upload/dropzone.min.js"></script>
<script type="text/javascript" src="template/js/avisos.js"></script>
<link rel="stylesheet" href="template/image_upload/dropzone.min.css">
<link rel="stylesheet" href="template/css/avisos.css">

<div class="page-header">
  <h2 class="titulomenu">Editor de avisos</h2>
</div>
<!-- Descripcion y tamaños de la galeria -->
<div class="container col-md-4">
  <h4>Para agregar imagenes arrastrar y soltar a cada area</h4>
  <p>Las medidas para cada aviso ya estan preestablecidas en una presentación de PowerPoint, una vez terminada la edicion los pasos a seguir son:</p>
  <ul class="list-group">
    <li class="list-group-item"> 1. Archivo</li>
    <li class="list-group-item"> 2. Guardar como</li>
    <li class="list-group-item"> 3. Tipo:JPEG</li>
  </ul>
  <p>A continuacion se anexan los archivos base:</p>
    <center>
    <div class="btn-group" role="group">
       <a class="btn btn-default fa fa-file-powerpoint-o" href="images/archivos-base/banner-horizontal.pptx" download>
         Banner horizontal
       </a>
       <a class="btn btn-default fa fa-file-powerpoint-o" href="images/archivos-base/banner-vertical.pptx" download>
         Banner vertical
       </a>
       <a class="btn btn-default fa fa-file-powerpoint-o" href="images/archivos-base/full-banner.pptx" download>
         Full banner
       </a>
     </div>
   </center>
 </div>
</div>

<br>
<!--Plantilla drag and drop -->
<div class="container col-md-8">
    <div id="left" class="dropzone col-md-4">
        <div class="dz-message" data-dz-message><span>Arrastra o haz clic para agregar fotos</span></div>
        <div class="dz-default dz-message"></div>
    </div>
    <div id="header" class="dropzone col-md-8">
        <div class="dz-message" data-dz-message><span>Arrastra o haz clic para agregar fotos</span></div>
        <div class="dz-default dz-message"></div>
    </div>
    <div id="center" class="dropzone col-md-4">
        <div class="dz-message" data-dz-message><span>Arrastra o haz clic para agregar fotos</span></div>
        <div class="dz-default dz-message"></div>
    </div>
    <div id="right-bottom" class="dropzone col-md-4">
        <div class="dz-message" data-dz-message><span>Arrastra o haz clic para agregar fotos</span></div>
        <div class="dz-default dz-message"></div>
    </div>
</div>
