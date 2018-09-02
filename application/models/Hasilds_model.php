<?php

class Hasilds_model extends CI_Model {
	

	public function get_hasilds()
	{
		return $this->db->select('*, tb_hasilds.id_hasilds AS gpid ')
						->from('tb_hasilds')
						->join('tb_user', 'tb_user.id = tb_hasilds.id_user')
						->join('tb_penyakit', 'tb_penyakit.id_p = tb_hasilds.id_penyakit ')
						->get()
						->result_array();
	}

	public function getById($gpid){
		return $query = $this->db->query("SELECT * FROM tb_hasilds WHERE id_hasilds='$gpid' ")->row_array();

	}

	public function hapus_hasilds($id_hasilds){
		$this->db->where('id_hasilds', $id_hasilds);
		$this->db->delete('tb_hasilds');
	}

}