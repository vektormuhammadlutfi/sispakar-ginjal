<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hasil_ds extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Hasilds_model');
		
	}
	public function index(){
		$data['contents'] = 'admin/hasil_ds'; 
		$data['kelompok_data'] = $this->Hasilds_model->get_hasilds();
		$this->load->view('templates/index', $data);
	}

	public function hapus_ds(){
		$id_hasilds=$this->uri->segment(3);
		$this->Hasilds_model->hapus_hasilds($id_hasilds);
		redirect('hasil_ds/index');
	}
}