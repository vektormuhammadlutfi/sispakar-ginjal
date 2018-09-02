<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hasil_cf extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Hasil_model');
		
	}
	public function index(){
		$data['contents'] = 'admin/hasil_cf'; 
		$data['kelompok_data'] = $this->Hasil_model->get_hasilcf();
		$this->load->view('templates/index', $data);
	}

	public function hapus_cf(){
		$id_hasilcf=$this->uri->segment(3);
		$this->Hasil_model->hapus_hasilcf($id_hasilcf);
		redirect('hasil_cf/index');
	}

	// public function save(){
	// 	if (isset($_POST['submit'])){
	// 		$this->Hasil_model->insert();
	// 		redirect('dashboard/diagnosa');
	// 	}
	// 	$data['view']='user/diagnosa/hasilcf';
	// 	$this->load->view('user/diagnosa/index', $data);
	// }
}