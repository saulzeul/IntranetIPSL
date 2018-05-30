<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Eventos extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}
//Mostrar vistas de los eventos
	public function index(){
    $this->load->view('header.php');
		$this->load->view('eventos.php');
    $this->load->view('footer.php');
	}

}
