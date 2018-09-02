<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct(){
    parent::__construct();
  }

	public function index()
	{
		if($this->session->userdata('is_login') == FALSE || $this->session->userdata('level') != 'admin'){
			redirect('dashboard/admin');
		}
		$data['contents']='admin/dashboard';
		$this->load->view('templates/index', $data);
	}
}
