<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Panel extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');

	}
  //Cargar la vista Panel
	public function index()
	{
		//Verificar si el usuario esta logueado de lo contrario redireccionar al login
		if (isset($this->session->userdata['logged_in'])) {
		$nom_usuario = ($this->session->userdata['logged_in']['nom_usuario']);
		$pass_usuario = ($this->session->userdata['logged_in']['pass_usuario']);
		$tipo_usuario = ($this->session->userdata['logged_in']['tipo_usuario']);
		$this->load->view('header.php');
		$this->load->view('panel.php');
		$this->load->view('footer.php');
		} else {
		redirect('login');
		}
	}

}
