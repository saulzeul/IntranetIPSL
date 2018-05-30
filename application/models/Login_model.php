<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login_model extends CI_Model{
  function __construct(){
    parent::__construct();
    $this->load->helper('url');
  }
//Verificar en la tabla "usuarios" si el usuario a loguear se encuentra
function logearse($nom_usuario, $pass_usuario){
    $this -> db -> select('*');
    $this -> db -> from('usuarios');
    $this -> db -> where('nom_usuario', $nom_usuario);
    $this -> db -> where('pass_usuario', $pass_usuario);
    $this -> db -> limit(1);

    $query = $this -> db -> get();

    if($query -> num_rows() == 1)
    {
    return $query->result();
    }
    else
    {
    return false;
    }
  }

// Leer informacion de usuarios para poder asignar rol de usuario
  function leer_informacion_usuario($nom_usuario){
    $this->db->select('*');
    $this->db->from('usuarios');
    $this->db->where('nom_usuario', $nom_usuario);
    $this->db->limit(1);
    $query = $this->db->get();
    if ($query->num_rows() == 1) {
    return $query->result();
    } else {
    return false;
    }
  }

//Obtener eventos calendario usuarios no logueados solo lectura
  function obtEventos(){
    $this->db->select('id_evento id, nom_evento title, descripcion description, fecha_inicio start, fecha_fin end');
    $this->db->from('calendario_sc');

    return $this->db->get()->result();
  }

//Mostrar contactos en barra de busqueda
  function mostrarContactos(){
    $this->db->select('*');
    $this->db->from('directorio');
    return $this->db->get()->result();
  }


}
