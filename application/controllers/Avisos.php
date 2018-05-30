<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Avisos extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}
	private $upload_path_header = "./images/header";
	private $upload_path_left = "./images/left";
	private $upload_path_center = "./images/center";
	private $upload_path_rightbottom = "./images/rightbottom";
	private $upload_path_bottomleftcenter = "./images/bottomleftcenter";

	public function index()
	{
		$this->load->view('menu/rh/avisos.php');
	}
//Subir fotos a galeria
	public	function subirfotosHeader(){
		if ( ! empty($_FILES)){
			$config["upload_path"] = $this->upload_path_header;
			$config["allowed_types"] = "gif|jpg|png";
			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload("file")) {
				echo "Error al subir las imagenes";
			}
		}
	}

	// Eliminar fotos de la galeria
		public function eliminarfotosHeader(){
			$file = $this->input->post("file");
			if ($file && file_exists($this->upload_path_header . "/" . $file)){
				unlink($this->upload_path_header . "/". $file);
			}
		}

	// Mostrar fotos en el panel de avisos
		public function mostrarfotosHeader(){
			$this->load->helper("file");
			$files = get_filenames($this->upload_path_header);
			foreach ($files as &$file) {
				$file = array(
					'name' => $file,
					'size' => filesize($this->upload_path_header . "/" . $file)
				);
			}
			header("Content-type: text/json");
			header("Content-type: application/json");
			echo json_encode($files);
		}

		public	function subirfotosLeft(){
			if ( ! empty($_FILES)){
				$config["upload_path"] = $this->upload_path_left;
				$config["allowed_types"] = "gif|jpg|png";
				$this->load->library('upload', $config);

				if ( ! $this->upload->do_upload("file")) {
					echo "Error al subir las imagenes";
				}
			}
		}

		// Eliminar fotos de la galeria
		public function eliminarfotosLeft(){
				$file = $this->input->post("file");
				if ($file && file_exists($this->upload_path_left . "/" . $file)){
					unlink($this->upload_path_left . "/". $file);
				}
		}

		// Mostrar fotos en el panel de avisos
			public function mostrarfotosLeft(){
				$this->load->helper("file");
				$files = get_filenames($this->upload_path_left);
				foreach ($files as &$file) {
					$file = array(
						'name' => $file,
						'size' => filesize($this->upload_path_left . "/" . $file)
					);
				}
				header("Content-type: text/json");
				header("Content-type: application/json");
				echo json_encode($files);
			}

			public	function subirfotosCenter(){
				if ( ! empty($_FILES)){
					$config["upload_path"] = $this->upload_path_center;
					$config["allowed_types"] = "gif|jpg|png";
					$this->load->library('upload', $config);

					if ( ! $this->upload->do_upload("file")) {
						echo "Error al subir las imagenes";
					}
				}
			}

			// Eliminar fotos de la galeria
			public function eliminarfotosCenter(){
					$file = $this->input->post("file");
					if ($file && file_exists($this->upload_path_center . "/" . $file)){
						unlink($this->upload_path_center . "/". $file);
					}
			}

			// Mostrar fotos en el panel de avisos
				public function mostrarfotosCenter(){
					$this->load->helper("file");
					$files = get_filenames($this->upload_path_center);
					foreach ($files as &$file) {
						$file = array(
							'name' => $file,
							'size' => filesize($this->upload_path_center . "/" . $file)
						);
					}
					header("Content-type: text/json");
					header("Content-type: application/json");
					echo json_encode($files);
				}

				public	function subirfotosRightbottom(){
					if ( ! empty($_FILES)){
						$config["upload_path"] = $this->upload_path_rightbottom;
						$config["allowed_types"] = "gif|jpg|png";
						$this->load->library('upload', $config);

						if ( ! $this->upload->do_upload("file")) {
							echo "Error al subir las imagenes";
						}
					}
				}

				// Eliminar fotos de la galeria
				public function eliminarfotosRightbottom(){
						$file = $this->input->post("file");
						if ($file && file_exists($this->upload_path_rightbottom . "/" . $file)){
							unlink($this->upload_path_rightbottom . "/". $file);
						}
				}

				// Mostrar fotos en el panel de avisos
					public function mostrarfotosRightbottom(){
						$this->load->helper("file");
						$files = get_filenames($this->upload_path_rightbottom);
						foreach ($files as &$file) {
							$file = array(
								'name' => $file,
								'size' => filesize($this->upload_path_rightbottom . "/" . $file)
							);
						}
						header("Content-type: text/json");
						header("Content-type: application/json");
						echo json_encode($files);
					}


}
