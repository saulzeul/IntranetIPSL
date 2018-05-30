<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Configuracion extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Configuracion_model');
	}

	public function index(){
		$this->load->view('menu/configuracion.php');
	}
//Agregar usuario a sistema
	public function guardar(){
		$data = array(
			'nom_usuario' => $this->input->post('nom_usuario', TRUE),
			'email_usuario' => $this->input->post('email_usuario', TRUE),
			'pass_usuario' => $this->input->post('pass_usuario', TRUE),
			'tipo_usuario' => $this->input->post('tipo_usuario', TRUE),
		);
		$this->Configuracion_model->guardar($data);
		redirect('panel#!/configuracion');
	}

// Editar usuario a sistema
	public function editar(){
		$this->Configuracion_model->editar();
		redirect('panel#!/configuracion');
		}

// Eliminar usuario del sistema
	public function eliminar(){
		$this->Configuracion_model->eliminar();
		redirect('panel#!/configuracion');
		}

//Actualizar cuenta de correo sistema
	public function act_email(){
		$this->Configuracion_model->act_email();
		redirect('panel#!/configuracion');
	}

//Enviar email prueba
	public function enviar_email(){
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
