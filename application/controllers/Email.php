<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Administracion extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
	}

	public function enviar_email()
		{
			$this->load->library('email');
			$configuracion_email['mailtype'] = 'html';
			$this->email->from('saul_zeul@hotmailcom','Saul Espinoza');
			$this->email->to('saul_zeul@hotmail.com');
			$this->email->cc('saule@eyesa.com.mx');
			$this->email->subject('Probando codeigniter');
			$this->email->message('Probando enviar desde aqui!!!');

			if ($this->email->send()) {
				echo "Correo enviado";
				redirect('panel#!/configuracion');
			}else{
				echo $this->email->print_debugger();
			}
		}
}
