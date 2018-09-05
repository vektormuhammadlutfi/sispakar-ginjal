<?php

class Hasil_model extends CI_Model {
	
	public function daftarHasil(){
		return $this->db->get('tb_hasilcf')->result();
	}

	public function getById($id){
		return $query = $this->db->query("SELECT * FROM tb_penyakit WHERE id_p='$id' ")->row_array();
	}

	// public function get_hasilcf()
	// {
	// 	return $this->db->select('*, tb_hasilcf.id_hasilcf AS gpid ')
	// 					->from('tb_hasilcf')
	// 					->join('tb_user', 'tb_user.id = tb_hasilcf.id_user')
	// 					->join('tb_penyakit', 'tb_penyakit.id_p = tb_hasilcf.id_penyakit ')
	// 					->get()
	// 					->result_array();
	// }

	// public function getById($gpid){
	// 	return $query = $this->db->query("SELECT * FROM tb_hasilcf WHERE id_hasilcf='$gpid' ")->row_array();

	// }

	// public function insert(){
	// 	$id_user = $this->input->post('id_user');
	// 	$id_penyakit = $this->input->post('id_penyakit');
	// 	$tanggal = $this->input->post('tanggal');
	// 	$nilaicf = $this->input->post('nilaicf');

	// $data = array(
	// 				'id_user'=>$id_user,
	// 				'id_penyakit'=>$id_penyakit,
	// 				'tanggal'=>$tanggal,
	// 				'nilaicf'=>$nilaicf,
	// 		);
	// $this->db->insert('tb_hasilcf', $data);

	// }

	public function hapus_hasilcf($id_hasilcf){
		$this->db->where('id_hasilcf', $id_hasilcf);
		$this->db->delete('tb_hasilcf');
	}

}