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
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		$level = $this->input->post('level');


		$query = $this->db->query("INSERT INTO tb_user (nama_pengguna, jk, umur, alamat, username, password, level) VALUES ('$nama_pengguna', '$jk', '$umur', '$alamat', '$username', '$password', '$level')");
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
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		$level = $this->input->post('level');


		$query = $this->db->query("UPDATE tb_user SET nama_pengguna='$nama_pengguna', jk='$jk', umur='$umur', alamat='$alamat', username='$username', password='$password', level='$level' WHERE id='$id' ");
		return $query; 
	}

	public function hapus_user($id){
		$query = $this->db->query("DELETE FROM tb_user WHERE id='$id'");
		return $query;
	}

}

?>