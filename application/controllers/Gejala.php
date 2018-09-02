<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gejala extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Gejala_model');
		
	}
	public function index(){
		$data['contents'] = 'admin/gejala'; 
		$data['gejala_data'] = $this->Gejala_model->get_gejala();
		$this->load->view('templates/index', $data);
	}

	
	public function create(){
		if (isset($_POST['submit'])){
			$this->Gejala_model->insert();
			redirect('gejala/index');
		}
		$data['contents']='admin/tambah_gejala';
		$this->load->view('templates/index', $data);
	}

	public function edit(){
		if (isset($_POST['submit'])){
			$this->Gejala_model->edit();
			redirect('gejala/index');
		}

		$id=$this->uri->segment(3);
		$data['gejala'] = $this->Gejala_model->getById($id);
		$data['contents'] = 'admin/gejala_edit'; 
		$this->load->view('templates/index', $data);
	}

	public function hapus(){
		$id = $this->uri->segment(3);
		$this->Gejala_model->hapus($id);
		redirect('gejala/index');
	}
}

?>