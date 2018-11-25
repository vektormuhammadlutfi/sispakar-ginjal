<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regist_model extends CI_Model {

	
	public function insert(){
		$nama_pengguna = $this->input->post('nama_pengguna');
		$jk = $this->input->post('jk');
		$umur = $this->input->post('umur');
		$alamat = $this->input->post('alamat');
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		
	
	$data = array(
					'nama_pengguna'=>$nama_pengguna,
					'jk'=>$jk,
					'umur'=>$umur,
					'alamat'=>$alamat,
					'username'=>$username,
					'password'=>$password,
					'level' => 'pasien'
			);
	$this->db->insert('tb_user', $data);
	
	}
}
