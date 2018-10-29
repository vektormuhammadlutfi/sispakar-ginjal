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
		$data['hasilcf'] = $this->db->query("SELECT * FROM tb_hasilcf JOIN tb_user on tb_user.id = tb_hasilcf.id_user ORDER BY id_hasilcf DESC")->result();

		$dompdf = new Dompdf();

		// $data = array(
		// 			"nama" => "Akbar Abustang",
		// 			"url" => "http://akbarcakep.com"
		// );
 
		$html = $this->load->view('user/laporan/laporancf.php',$data,true);

		$dompdf->load_html($html);

		// (Optional) Setup the paper size and orientation
		$dompdf->set_paper('A4', 'landscape');

		// Render the HTML as PDF
		$dompdf->render();

		// Get the generated PDF file contents
		$pdf = $dompdf->output();

		// Output the generated PDF to Browser
		$dompdf->stream('laporancf.pdf', array("Attachment" => false));
		
	}

	public function cetakds(){
		$data['hasilds'] = $this->db->query("SELECT * FROM tb_hasilds JOIN tb_user on tb_user.id = tb_hasilds.id_user ORDER BY id_hasilds DESC")->result();

		$dompdf = new Dompdf();

		$html = $this->load->view('user/laporan/laporands.php',$data,true);

		$dompdf->load_html($html);

		// (Optional) Setup the paper size and orientation
		$dompdf->set_paper('A4', 'landscape');

		// Render the HTML as PDF
		$dompdf->render();

		// Get the generated PDF file contents
		$pdf = $dompdf->output();

		// Output the generated PDF to Browser
		$dompdf->stream('laporands.pdf', array("Attachment" => false));
		
	}

	public function cetakuser(){
		$data['user'] = $this->db->query("SELECT * FROM tb_user  ORDER BY id DESC")->result();

		$dompdf = new Dompdf();
 
		$html = $this->load->view('user/laporan/laporanpg.php',$data,true);

		$dompdf->load_html($html);

		// (Optional) Setup the paper size and orientation
		$dompdf->set_paper('A4', 'landscape');

		// Render the HTML as PDF
		$dompdf->render();

		// Get the generated PDF file contents
		$pdf = $dompdf->output();

		// Output the generated PDF to Browser
		$dompdf->stream('laporanpg.pdf', array("Attachment" => false));
		
	}
}
