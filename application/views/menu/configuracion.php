<script type="text/javascript">var url = "template/js/configuracion.js"; $.getScript(url);</script>
<div class="page-header">
  <h2 class="titulomenu">Configuración</h2>
</div>
<div class="col-sm-4">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">Usuarios</h3>
      <button type="button" name="agregar"  data-target=".agregaruser" data-toggle="modal" class="btn btn-primary fa fa-plus"></button>
      <div class="modal fade agregaruser" id="agregaruser" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title" id="">Agregar usuario</h4>
            </div>
            <div class="modal-body">
              <form method="POST" id="form_crear_usuario">
                <div class="form-group"><input type="text" name="nom_usuario" class="form-control"  placeholder="Nombre"></div>
                <div class="form-group"><input type="email" name="email_usuario" class="form-control"  placeholder="Email"></div>
                <div class="form-group">
                  <select class="form-control" name="tipo_usuario">
                    <option value="sistemas">Sistemas</option>
                    <option value="rh">Recursos Humanos</option>
                    <option value="mp">Maquina de papel</option>
                  </select>
                </div>
                <div class="form-group"><input type="password" name="pass_usuario" class="form-control"  placeholder="Contraseña"></div>
                <div class="form-group"><input type="password" class="form-control"  placeholder="Repite contraseña"></div>
                <div class="form-group"><button id="crear_usuario" class="btn btn-primary">Guardar</button></div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <table class="table table-bordered  table-condensed table-striped table-responsive table-hover">
      <thead>
        <tr><th>Nombre</th><th>Editar</th><th>Eliminar</th></tr>
        <tbody>
          <?php $query = $this->db->query("SELECT * FROM usuarios");foreach ($query->result_array() as $row){?>
          <tr>
            <td>
            <?php    echo $row['nom_usuario'];?>
            </td>
           <td>
             <center><a name="editar"  data-target="#editaruser<?php echo $row['id_usuarios'] ?>" data-toggle="modal" class="btn btn-primary fa fa-pencil-square-o "></a></center>
             <div class="modal fade editaruser" id="editaruser<?php echo $row['id_usuarios'] ?>" tabindex="-1" role="dialog" aria-labelledby="editaruser" aria-hidden="true">
               <div class="modal-dialog modal-sm">
                 <div class="modal-content">
                   <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                     <h4 class="modal-title">Editar usuario</h4>
                   </div>
                   <div class="modal-body">
                     <form action="<?php echo base_url()?>configuracion/editar/<?php echo $row['id_usuarios'];?>" method="post">
                         <div class="input-group">
                           <span class="input-group-addon"><i class="fa fa-user-circle-o"></i></span>
                           <input type="text"  name="nom_usuario" class="form-control" value="<?php echo $row['nom_usuario'];?>">
                         </div>
                         <div class="input-group">
                           <span class="input-group-addon">Email</span>
                           <input type="email"  name="email_usuario" class="form-control" value="<?php echo $row['email_usuario'];?>">
                         </div>
                         <div class="input-group">
                           <span class="input-group-addon">Nueva contraseña</span>
                           <input type="password"  name="pass_usuario" class="form-control" value="<?php echo $row['pass_usuario'];?>">
                         </div>
                         <div class="input-group">
                           <span class="input-group-addon">Repite contraseña</span>
                           <input type="password"  class="form-control"   value="<?php echo $row['pass_usuario'];?>">
                         </div>
                         <div class="input-group">
                          <span class="input-group-addon">Area</span>
                          <select class="form-control"  name="tipo_usuario">
                             <option value="rh" <?php if ($row['tipo_usuario'] == 'rh'){ echo 'selected';} ?>>Recursos Humanos</option>
                             <option value="sistemas" <?php if ($row['tipo_usuario'] == 'sistemas'){ echo 'selected';} ?>>Sistemas</option>
                             <option value="mp" <?php if ($row['tipo_usuario'] == 'mp'){ echo 'selected';} ?>>Maquina de papel</option>
                          </select>
                         </div>
                         <div class="form-group"><button type="submit"  name="editar" class="btn btn-primary">Actualizar</button></div>
                     </form>
                   </div>
                 </div>
               </div>
             </div>
            </td>
            <td><center><a href="<?php echo base_url()?>configuracion/eliminar/<?php echo $row['id_usuarios'];?>" type="button" data-toggle="modal" name="eliminar" class="btn btn-danger fa fa-trash-o "></a></center></td>
          </tr><?php } ?>
        </tbody>
      </thead>
    </table>
  </div>
</div>
<div class="col-sm-4">
  <div class="panel panel-default">
    <div class="panel-heading"><h3 class="panel-title">Cuenta de correo</h3></div>
       <table class="table table-bordered  table-condensed table-striped table-responsive table-hover">
         <thead>
           <tr><th>Editar</th></tr>
           <tbody>
             <?php $query = $this->db->query("SELECT * FROM datos_email");foreach ($query->result_array() as $row){?>
             <tr>
               <td><?php  echo $row['email_sis'];?></td>
                 <td>
                   <center><a data-target="#edit_email" data-toggle="modal" name="#edit_email" class="btn btn-primary fa fa-pencil-square-o"></a></center>
                   <div class="modal fade edit_email" id="edit_email" tabindex="-1" role="dialog" aria-labelledby="edit_email" aria-hidden="true">
                     <div class="modal-dialog modal-sm">
                       <div class="modal-content">
                         <div class="modal-header">
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                           <h4 class="modal-title" id="">Configurar email</h4>
                         </div>
                         <div class="modal-body">
                           <form  action="<?php echo base_url()?>configuracion/act_email/<?php echo $row['id_email'];?>" method="post">
                              <div class="input-group">
                                <span class="input-group-addon" >SMTP</span><input class="form-control" type="text"  name="email_smtp" value="<?php echo $row['email_smtp'];?>">
                              </div>
                              <div class="input-group">
                                <span class="input-group-addon">Puerto</span><input type="number"  name="email_port" value="<?php echo $row['email_port'];?>" class="form-control">
                              </div>
                              <div class="input-group">
                                <span class="input-group-addon">Cifrado</span><input type="text"  name="email_cif" value="<?php echo $row['email_cif'];?>" class="form-control">
                              </div>
                              <div class="input-group">
                                <span class="input-group-addon">Email</span><input type="email" name="email_sis" value="<?php echo $row['email_sis'];?>" class="form-control">
                              </div>
                              <div class="input-group">
                                <span class="input-group-addon">Contraseña</span><input type="password"  name="email_pass" value="<?php echo $row['email_pass'];?>" class="form-control">
                              </div>
                              <div class="form-group">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                                <a data-toggle="collapse" data-target="#prueba_correo" class="btn btn-primary">Prueba</a>
                              </div>
                           </form>
                           <div id="prueba_correo" class="collapse">
                             <form name="form_email_test" action="<?=base_url("configuracion/enviar_email")?>" method="post">
                               <div class="form-group">
                                 <input type="email" name="email_destino" class="form-control" ng-model="des_email_test" placeholder="Destinatario" required autofocus>
                               </div>
                               <div class="form-group">
                                 <input type="text" name="asunto" class="form-control" ng-model="asu_email_test" placeholder="Asunto" required autofocus>
                               </div>
                               <div class="input-group">
                                 <input name="mensaje" type="text" class="form-control" ng-model="men_email_test"required autofocus placeholder="Mensaje">
                               </div>
                             </form>
                             <a href="configuracion/enviar_email" class="btn btn-primary">Prueba correo</a>
                           </div>
                         </div>
                       </div>
                     </div>
                   </div>
                 </td>
             </tr><?php } ?>
           </tbody>
         </thead>
       </table>
    </div>
</div>
