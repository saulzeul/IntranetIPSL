<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Capacitacion extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Capacitacion_model');
	}
//Mostrar vista capacitacion
	public function index(){
		$this->load->view('menu/rh/capacitacion.php');
	}

//Obtener eventos para poder mostrarlos en el calendario
	public function obtEventos(){
		$data = $this->Capacitacion_model->obtEventos();
		echo json_encode($data);
	}

	// Agregar evento a la base de datos
	public function agreEventos(){
		$data = array(
			'nom_evento' => $this->input->post('nom_evento'),
			'descripcion' => $this->input->post('descripcion'),
			'fecha_inicio' => $this->input->post('fecha_inicio'),
			'fecha_fin' => $this->input->post('fecha_fin')
		);
		$this->Capacitacion_model->agreEventos($data);
	}
	//Actualizar eventos
	public function actEventos(){
		$param['id_evento'] = $this->input->post('id_evento');
		$param['fecha_inicio'] = $this->input->post('fecha_inicio');
		$param['fecha_fin'] = $this->input->post('fecha_fin');
		$data = $this->Capacitacion_model->actEventos($param);
		echo $data;
	}

	//Editar evento en modal
	public function editEventos(){
		$param['id_evento'] = $this->input->post('id_evento');
		$param['nom_evento'] = $this->input->post('nom_evento');
		$param['editrespEvento'] = $this->input->post('descripcion');
		$data = $this->Capacitacion_model->editEventos($param);
		echo $data;
	}

	//Eliminar evento en modal
	public function elimEventos(){
		$id_evento = $this->input->post('id_evento');
		$data = $this->Capacitacion_model->elimEventos($id_evento);
		echo $data;
	}

}
