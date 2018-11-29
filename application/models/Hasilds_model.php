<?php

class Hasilds_model extends CI_Model {
	
	public function getById($id){
		return $query = $this->db->query("SELECT * FROM tb_penyakit WHERE id_p='$id' ")->row_array();
	}
	
	public function get_hasilds()
	{
		return $this->db->query("SELECT * FROM tb_hasilds JOIN tb_user on tb_user.id = tb_hasilds.id_user")->result();
	}

	public function hapus_hasilds($id_hasilds){
		$this->db->where('id_hasilds', $id_hasilds);
		$this->db->delete('tb_hasilds');
	}

}