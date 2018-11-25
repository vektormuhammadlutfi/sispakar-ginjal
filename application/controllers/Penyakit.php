<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penyakit extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Penyakit_model');
		
	}
	public function index(){
		$data['contents'] = 'admin/penyakit'; 
		$data['penyakit_data'] = $this->Penyakit_model->daftarPenyakit();
		$this->load->view('templates/index', $data);
	}


	public function create(){
		if (isset($_POST['submit'])){
			$this->Penyakit_model->insert();
			redirect('penyakit/index');
		}
		$data['contents']='admin/tambah_penyakit';
		$this->load->view('templates/index', $data);
	}

	public function edit(){
		if (isset($_POST['submit'])){
			$this->Penyakit_model->edit();
			redirect('penyakit/index');
		}
		$id = $this->uri->segment(3);
		$data['penyakit'] = $this->Penyakit_model->getById($id);
		$data['contents'] = 'admin/penyakit_edit'; 
		$this->load->view('templates/index', $data);

	}

	public function hapus(){
		$id = $this->uri->segment(3);
		$this->Penyakit_model->hapus($id);
		redirect('penyakit/index');
	}
}
?>