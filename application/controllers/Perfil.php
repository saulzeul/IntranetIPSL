<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Perfil extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	public function index(){
		$this->load->view('menu/perfil/perfil.php');
	}

}
