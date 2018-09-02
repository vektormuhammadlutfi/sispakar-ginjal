<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelompok_gejala extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Kelompok_model'); //load model kelompok
	}
	
	public function index()
	{
		$data['contents'] = 'admin/kelompok_gejala'; 
		$data['kelompok_data'] = $this->Kelompok_model->daftarGejala();
		$this->load->view('templates/index', $data);
	}

	public function create()
	{
		if (isset($_POST['submit'])){
			$this->Kelompok_model->insert();
			redirect('kelompok_gejala/index');
		}
		
		$data['contents'] = 'admin/kelompok_tambah'; 
		$this->load->view('templates/index', $data);


	}


	public function edit(){
		if (isset($_POST['submit'])){
			$this->Kelompok_model->edit();
			redirect('kelompok_gejala/index');
		}

		$id_klp_gejala=$this->uri->segment(3);
		$data['gejala'] = $this->Kelompok_model->getById($id_klp_gejala);
		$data['contents'] = 'admin/kelompok_edit'; 
		$this->load->view('templates/index', $data);
	}

	public function hapus(){
		$id_klp_gejala=$this->uri->segment(3);
		$this->Kelompok_model->hapus($id_klp_gejala);
		redirect('kelompok_gejala/index');

	}

}
