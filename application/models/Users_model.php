<?php

class Users_model extends CI_Model {

	
	public function get_users()
	{
		$query = $this->db->query("SELECT * FROM tb_user");
		return $query->result_array();
	}

	public function insert_user(){
		$id = $this->input->post('id');
		$nama_pengguna = $this->input->post('nama_pengguna');
		$jk = $this->input->post('jk');
		$umur = $this->input->post('umur');
		$alamat = $this->input->post('alamat');
		$email = $this->input->post('email');
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		$level = $this->input->post('level');
		$status = $this->input->post('status');


		$query = $this->db->query("INSERT INTO tb_user (nama_pengguna, jk, umur, alamat, email, username, password, level, status) VALUES ('$nama_pengguna', '$jk', '$umur', '$alamat', '$email', '$username', '$password', '$level', '$status')");
		return $query;
	}

	public function getById($id){
		return $query = $this->db->query("SELECT * FROM tb_user WHERE id='$id' ")->row_array();
	}

	public function edit_user(){
		$id = $this->input->post('id');
		$nama_pengguna = $this->input->post('nama_pengguna');
		$jk = $this->input->post('jk');
		$umur = $this->input->post('umur');
		$alamat = $this->input->post('alamat');
		$email = $this->input->post('email');
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		$level = $this->input->post('level');
		$status = $this->input->post('status');


		$query = $this->db->query("UPDATE tb_user SET nama_pengguna='$nama_pengguna', jk='$jk', umur='$umur', alamat='$alamat', email='$email', username='$username', password='$password', level='$level', status='$status' WHERE id='$id' ");
		return $query; 
	}

	public function hapus_user($id){
		$query = $this->db->query("DELETE FROM tb_user WHERE id='$id'");
		return $query;
	}

}

?>