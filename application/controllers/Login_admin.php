<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Login_model'); //load model login
	}
	
	public function index()
	{
		if($this->session->userdata('is_login') == TRUE && $this->session->userdata('level') == 'admin'){redirect('templates/index');}
		$this->load->view('templates/index');
	}

	public function login()
	{
		if (isset($_POST['submit'])){
			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));

			$check = $this->Login_model->checkLogin($username, $password);
			if (!$check) {
				redirect('dashboard/admin');
			}else{
				$data = array(
						'username' => $username,
						'password' => $password,
						'is_login' => TRUE,
						'level' => $check->level
				);
				$this->session->set_userdata($data);
				redirect('home/index');
			}

		}
	}

	public function logout()
	{
		$data = array('username','password','is_login', 'level');
		$this->session->unset_userdata($data);
		redirect('dashboard/admin');	
	}

}
