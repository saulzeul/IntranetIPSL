<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		//Cargar Helpers y librerias y el modelo

		$this->load->helper(array('url','form'));
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('Login_model');
// ----------- Librerias para login con LDAP ----------------//
		$this->load->library('table');

	}
	// Mostrar la vista Login
	public function index(){
			$this->load->view('header.php');
			$this->load->view('login.php');
			$this->load->view('footer.php');
	}
		// Verificar usuario en base de datos
	public function iniciar_sesion(){
			$this->form_validation->set_rules('nom_usuario', 'nom_usuario', 'trim|required|xss_clean');
			$this->form_validation->set_rules('pass_usuario', 'pass_usuario', 'trim|required|xss_clean|callback_check_database');
			$nom_usuario = $this->input->post('nom_usuario');
			$pass_usuario = $this->input->post('pass_usuario');
			$result = $this->Login_model->logearse($nom_usuario, $pass_usuario);
			if($result == TRUE){
				$nom_usuario = $this->input->post('nom_usuario');
				$obtener = $this->Login_model->leer_informacion_usuario($nom_usuario);
			    $data= array(
						'nom_usuario' => $obtener[0]->nom_usuario,
						'pass_usuario' => $obtener[0]->pass_usuario,
						'tipo_usuario' => $obtener[0]->tipo_usuario,
			          );
								$this->session->set_userdata('logged_in',$data);
								//Roles
								$tipo_usuario = ($this->session->userdata['logged_in']['tipo_usuario']);
								switch ($tipo_usuario) {
									case 'sistemas':
										echo "dash";
										break;
									case 'rh':
										echo "capacitacion";
										break;
								}
				}else{
					echo "error";
				}
		}

	// Cerrar sesion
		public function cerrar_sesion(){
			$this->session->unset_userdata('logged_in');
			session_destroy();
			redirect('login', 'refresh');
		}

 //Obtener datos del calendario para usuarios no logueados (Solo lectura)
 		public function obtEventos(){
		  $data = $this->Login_model->obtEventos();
			echo json_encode($data);
		}

 //Mostrar contactos en barra de busqueda
 	public function mostrarContactos(){
		$data = $this->db->get('directorio');
		echo json_encode($data->result());
	}

}
?>
