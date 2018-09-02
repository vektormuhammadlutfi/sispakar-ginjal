<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rule_cf extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Rulecf_model'); //load model nilaicf
	}
	
	public function index()
	{
		$data['contents'] = 'admin/rule_cf'; 
		$data['kelompok_data'] = $this->Rulecf_model->daftarNilaicf();
		$this->load->view('templates/index', $data);
	}


	public function create()
	{
		if (isset($_POST['submit'])){
			$this->Rulecf_model->insert();
			redirect('rule_cf/index');
		}
		
		$data['contents'] = 'admin/rule_cf_tambah'; 
		$this->load->view('templates/index', $data);

	}

	public function edit(){
		if (isset($_POST['submit'])){
			$this->Rulecf_model->edit();
			redirect('rule_cf/index');
		}

		$gpid=$this->uri->segment(3);
		$data['nilaicf'] = $this->Rulecf_model->getById($gpid);
		$data['contents'] = 'admin/rule_cf_edit'; 
		$this->load->view('templates/index', $data);
	}

	public function hapus(){
		$id=$this->uri->segment(3);
		$this->Rulecf_model->hapus($id);
		redirect('rule_cf/index');

	}
}
