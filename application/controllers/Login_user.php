<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_user extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Login_model'); //load model login
	}
	
	public function index()
	{
		if($this->session->userdata('is_login') == TRUE && $this->session->userdata('level') == 'pasien'){redirect('dashboard/diagnosa');}
		$data['contentuser'] = 'user/dashboard';
		$this->load->view('user/login', $data);
	}

	public function login()
	{
		if (isset($_POST['submit'])){
			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));

			$check = $this->Login_model->checkLogin($username, $password);
			if (!$check) {
				redirect('login_user');
			}else{

				$data = array(
						'username' => $username,
						'password' => $password,
						'is_login' => TRUE,
						'nama_pengguna' => $check->nama_pengguna,
						'umur' => $check->umur,
						'level' => $check->level,
						'id_user' => $check->id
				);
				$this->session->set_userdata($data);
				redirect('dashboard/diagnosa');
			}
		}
		// else{
		// 	$url=base_url();
		// 	echo $this->session->set_flashdata('msg','Username Atau Password Salah');
		// 	redirect($url);
		// }
	}

	public function logout()
	{
		$data = array('username','password','is_login', 'nama_pengguna', 'umur', 'level');
		$this->session->unset_userdata($data);
		redirect('dashboard/index');	
	}

}
