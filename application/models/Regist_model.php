<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regist_model extends CI_Model {

	
	public function insert($kode){
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		$nama_pengguna = $this->input->post('nama_pengguna');
		$jk = $this->input->post('jk');
		$umur = $this->input->post('umur');
		$alamat = $this->input->post('alamat');
		$email = $this->input->post('email');
		
	
	$data = array(
					'username'=>$username,
					'password'=>$password,
					'nama_pengguna'=>$nama_pengguna,
					'jk'=>$jk,
					'umur'=>$umur,
					'alamat'=>$alamat,
					'email'=>$email,
					'level' => 'pasien',
					'kode_verifikasi' => $kode,
					'status' => 0
			);
	$this->db->insert('tb_user', $data);
	return $this->db->insert_id();
	
	}

	function getEmail($id){
		return $this->db->get_where('tb_user', array('id'=>$id))->row();
	}
}
