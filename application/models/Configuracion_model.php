<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//conectar con la base de datos 'usuarios'
class Configuracion_model extends CI_Model{
  function __construct(){
    parent::__construct();
    $this->load->helper('url');
  }
// Crear un usuario
  function guardar($data){
    $this->db->insert('usuarios', $data);
  }
  
// Editar un usuario
  function editar(){
    $data = array(
      'nom_usuario' => $this->input->post('nom_usuario', TRUE),
      'email_usuario' => $this->input->post('email_usuario', TRUE),
      'pass_usuario' => $this->input->post('pass_usuario', TRUE),
      'tipo_usuario' => $this->input->post('tipo_usuario', TRUE)
    );
    $this->db->where('id_usuarios', $this->uri->segment(3));
    $this->db->set($data);
    $this->db->update('usuarios');
  }
// Eliminar un usuario
  function eliminar(){
    $this->db->where('id_usuarios', $this->uri->segment(3));
    $this->db->delete('usuarios');
  }

//Actualizar datos del email
  function act_email(){
    $data = array(
      'email_smtp' => $this->input->post('email_smtp', TRUE),
      'email_sis' => $this->input->post('email_sis', TRUE),
      'email_pass' => $this->input->post('email_pass', TRUE),
      'email_port' => $this->input->post('email_port', TRUE),
      'email_cif' => $this->input->post('email_cif', TRUE),
    );
    $this->db->where('id_email', $this->uri->segment(3));
    $this->db->set($data);
    $this->db->update('datos_email');
  }


}
 ?>
