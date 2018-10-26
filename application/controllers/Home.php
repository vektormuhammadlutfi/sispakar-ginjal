<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct(){
		parent::__construct();
		// require_once APPPATH.'libraries/Dompdf_gen.php';
		require_once APPPATH.'third_party/dompdf/dompdf_config.inc.php';
  }

	public function index()
	{
		if($this->session->userdata('is_login') == FALSE || $this->session->userdata('level') != 'admin'){
			redirect('dashboard/admin');
		}
		$data['contents']='admin/dashboard';
		$this->load->view('templates/index', $data);
	}

	public function cetak(){
		$dompdf = new Dompdf();

		$data = array(
					"nama" => "Akbar Abustang",
					"url" => "http://akbarcakep.com"
		);
 
		$html = $this->load->view('welcome_message',$data,true);

		$dompdf->load_html($html);

		// (Optional) Setup the paper size and orientation
		$dompdf->set_paper('A4', 'landscape');

		// Render the HTML as PDF
		$dompdf->render();

		// Get the generated PDF file contents
		$pdf = $dompdf->output();

		// Output the generated PDF to Browser
		$dompdf->stream('laporanku.pdf', array("Attachment" => false));
		
	}
}
