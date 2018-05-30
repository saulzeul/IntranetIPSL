<link href="template/galeria/blueberry.css" rel="stylesheet">
<script type="text/javascript" src="template/galeria/jquery.blueberry.js"></script>
<link rel="stylesheet" href="template/css/eventos.css">
<style media="screen">
  .col-md-7{
    background-color: rgb(62, 117, 190);
  }
  .col-md-5{
    background-color: rgb(126, 201, 94);
  }
  .left{
    background-color: rgb(177, 10, 117);
  }
  .center{
    background-color: rgb(198, 118, 44);
  }
  .right{
    background-color: rgb(10, 177, 157);
  }
  .col-md-12{
    background-color: rgb(215, 204, 45);
  }
  .slides-right{
    width: 70% !important;
  }
</style>
<!-- Avisos -->
<div class="col-md-7">
  <video src="images/ipsl.mp4" autoplay width="640" height="360" ></video>
</div>
<div class="col-md-5">
  <div class="blueberry">
    <ul class="slides slides-right" id="slides">
      <?php
        $ruta = "images/rightbottom/"; // Indicar ruta
        $filehandle = opendir($ruta); // Abrir archivos
        while ($file = readdir($filehandle)) {
            if ($file != "." && $file != "..") {
                $tamanyo = GetImageSize($ruta . $file);
                ?>
        <li><img class="img-blueberry" src="<?php echo $ruta.$file ?>"></li>
        <?php
              }
          }
        closedir($filehandle); // Fin lectura archivos
          ?>
      </ul>
  </div>
</div>
<div class="col-md-4 left">
  <div class="blueberry">
    <ul class="slides" id="slides">
      <?php
        $ruta = "images/center/"; // Indicar ruta
        $filehandle = opendir($ruta); // Abrir archivos
        while ($file = readdir($filehandle)) {
            if ($file != "." && $file != "..") {
                $tamanyo = GetImageSize($ruta . $file);
                ?>
        <li><img class="img-blueberry" src="<?php echo $ruta.$file ?>"></li>
        <?php
              }
          }
        closedir($filehandle); // Fin lectura archivos
          ?>
      </ul>
  </div>
</div>
<div class="col-md-4 center">
  <div class="blueberry">
    <ul class="slides" id="slides">
      <?php
        $ruta = "images/center/"; // Indicar ruta
        $filehandle = opendir($ruta); // Abrir archivos
        while ($file = readdir($filehandle)) {
            if ($file != "." && $file != "..") {
                $tamanyo = GetImageSize($ruta . $file);
                ?>
        <li><img class="img-blueberry" src="<?php echo $ruta.$file ?>"></li>
        <?php
              }
          }
        closedir($filehandle); // Fin lectura archivos
          ?>
      </ul>
  </div>
</div>
<div class="col-md-4 right">
  <div class="blueberry">
    <ul class="slides" id="slides">
      <?php
        $ruta = "images/center/"; // Indicar ruta
        $filehandle = opendir($ruta); // Abrir archivos
        while ($file = readdir($filehandle)) {
            if ($file != "." && $file != "..") {
                $tamanyo = GetImageSize($ruta . $file);
                ?>
        <li><img class="img-blueberry" src="<?php echo $ruta.$file ?>"></li>
        <?php
              }
          }
        closedir($filehandle); // Fin lectura archivos
          ?>
      </ul>
  </div>
</div>
<script type="text/javascript">
// Galeria de los avisos
$(window).load(function() {
  $('.blueberry').blueberry();
});
</script>
