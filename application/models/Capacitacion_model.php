<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Capacitacion_model extends CI_Model{
  function __construct(){
    parent::__construct();
    $this->load->helper('url');
  }

  //Obtener Eventos
   function obtEventos(){
     $this->db->select('id_evento id, nom_evento title, descripcion description, fecha_inicio start, fecha_fin end');
     $this->db->from('calendario_sc');

     return $this->db->get()->result();
   }

   //Agregar evento a la base de datos
    function agreEventos($data){
       $this->db->insert('calendario_sc', $data);
   }

  //Actualizar Eventos
   function actEventos($param){
     $datos = array(
       'fecha_inicio' => $param['fecha_inicio'],
       'fecha_fin' =>$param['fecha_fin']
     );
     $this->db->where('id_evento', $param['id_evento']);
     $this->db->update('calendario_sc',$datos);
     if ($this->db->affected_rows() == 1) {
       return 1;
     }else{
       return 0;
     }
   }
  //Editar eventos
   function editEventos($param){
     $datos = array(
       'nom_evento' => $param['nom_evento'],
       'descripcion' => $param['editrespEvento'],
     );
     $this->db->where('id_evento', $param['id_evento']);
     $this->db->update('calendario_sc',$datos);
     if ($this->db->affected_rows() == 1) {
       return 1;
     }else{
       return 0;
     }
   }

  //Eliminar eventos
  function elimEventos($id_evento){
    $this->db->where('id_evento', $id_evento);
    $this->db->delete('calendario_sc');
    return 1;
  }
}
 ?>
