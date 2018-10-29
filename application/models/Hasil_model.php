<?php

class Hasil_model extends CI_Model {
	
	public function getById($id){
		return $query = $this->db->query("SELECT * FROM tb_penyakit WHERE id_p='$id' ")->row_array();
	}
	
	public function get_hasilcf()
	{
		return $this->db->query("SELECT * FROM tb_hasilcf JOIN tb_user on tb_user.id = tb_hasilcf.id_user")->result();
	}

	public function hapus_hasilcf($id_hasilcf){
		$this->db->where('id_hasilcf', $id_hasilcf);
		$this->db->delete('tb_hasilcf');
	}

}