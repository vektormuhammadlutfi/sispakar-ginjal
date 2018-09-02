<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	// cek username dan password admin
	public function checkLogin($username, $password)
	{
		return $this->db->query(" SELECT * FROM tb_user WHERE username='$username' AND password='$password' ")->row();
	}

}