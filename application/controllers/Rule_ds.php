<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rule_ds extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Ruleds_model'); //load model nilaids
	}
	
	public function index()
	{
		$data['contents'] = 'admin/rule_ds'; 
		$data['kelompok_data'] = $this->Ruleds_model->daftarNilaids();
		$this->load->view('templates/index', $data);
	}


	public function create()
	{
		if (isset($_POST['submit'])){
			$this->Ruleds_model->insert();
			redirect('rule_ds/index');
		}
		
		$data['contents'] = 'admin/rule_ds_tambah'; 
		$this->load->view('templates/index', $data);

	}

	public function edit(){
		if (isset($_POST['submit'])){
			$this->Ruleds_model->edit();
			redirect('rule_ds/index');
		}

		$gpid=$this->uri->segment(3);
		$data['nilaids'] = $this->Ruleds_model->getById($gpid);
		$data['contents'] = 'admin/rule_ds_edit'; 
		$this->load->view('templates/index', $data);
	}

	public function hapus(){
		$id=$this->uri->segment(3);
		$this->Ruleds_model->hapus($id);
		redirect('rule_ds/index');

	}
}
