
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regist_user extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Regist_model'); //load model gejala
	}
	
	public function index()
	{
		$this->load->view('user/regist');
	}

	public function create()
	{
		if (isset($_POST['submit'])){
			$this->Regist_model->insert();
			redirect('dashboard/login');
		}
		$this->load->view('usertemp/login');
	}

}