<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ReqComNuevoUsuario extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	public function index(){
		$this->load->view('menu/documentacion/sistemas/reqComNuevoUsuario.php');

	}

	public function generarPdf(){
		$data = [];
		$fecha = date("dmyhis");
		$html = "
		<table style='width: 100%;border: 1px solid black;border-collapse: collapse;'>
			<tbody>
				<tr>
					<td style='width: 50%;border: 1px solid black;'><img style='width:50%;' src='images/logo-largo.png'></td>
					<td style='width: 40%;border: 1px solid black;'>Requerimientos de cómputo para nuevos usuarios</td>
					<td style='width: 10%;border: 1px solid black;'>".$this->input->post('fecha_reqComNuevoUsuario')."</td>
				</tr>
			</tbody>
		</table>
		<table style='width: 100%;border: 1px solid black;border-collapse: collapse;'>
				<tbody>
					<tr>
						<td style='width: 50%;border: 1px solid black;'>Nombre:".$this->input->post('nom_user_reqComNuevoUsuario')."</td>
						<td style='width: 25%;border: 1px solid black;'>Area:".$this->input->post('departamento_reqComNuevoUsuario')."</td>
						<td style='width: 25%;border: 1px solid black;'>Nomina:".$this->input->post('nomina_reqComNuevoUsuario')."</td>
					</tr>
				</tbody>
		</table>
		<table style='width: 100%;border: 1px solid black;border-collapse: collapse;'>
			<tbody>
				<tr>
					<td style='width: 50%;border: 1px solid black;'>Tipo de equipo de computo:</td>
					<td style='width: 50%;border: 1px solid black;'>Software:</td>
				</tr>
			</tbody>
		</table>

		";
		//$html = $this->load->view('menu/documentacion/sistemas/reqComNuevoUsuario.php',$data,true);
		$pdfFilePath = "Requerimiento_".$fecha.".pdf";
		$this->load->library('M_pdf');
		$this->m_pdf->pdf->WriteHTML($html);
		$this->m_pdf->pdf->Output($pdfFilePath, "D");
	}

}
