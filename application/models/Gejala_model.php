<?php

class Gejala_model extends CI_Model {

	public function get_gejala()
	{
		return $this->db->query("SELECT * FROM tb_gejala JOIN tb_klp_gejala on tb_klp_gejala.id_klp_gejala = tb_gejala.id_klp_gejala")->result();
	}

	function all_gejala(){
		$query=$this->db->get("tb_gejalads");
		return $query;
	}
	
	public function listGejala(){
		return $this->db->get('tb_gejala')->result();
	}

	public function insert(){
		$id_klp_gejala = $this->input->post('id_klp_gejala');
		$kd_gejala = $this->input->post('kd_gejala');
		$nama_gejala = $this->input->post('nama_gejala');

	$data = array(
					'id_klp_gejala'=>$id_klp_gejala,
					'kd_gejala'=>$kd_gejala,
					'nama_gejala'=>$nama_gejala,
			);
	$this->db->insert('tb_gejala', $data);

	}

	public function getById($id){
		return $query = $this->db->query("SELECT * FROM tb_gejala WHERE id='$id' ")->row_array();

	}

	public function edit(){
		$id = $this->input->post('id');
		$id_klp_gejala = $this->input->post('id_klp_gejala');
		$kd_gejala = $this->input->post('kd_gejala');
		$nama_gejala = $this->input->post('nama_gejala');

		$data = array(
					'id_klp_gejala'=>$id_klp_gejala,
					'kd_gejala'=>$kd_gejala,
					'nama_gejala'=>$nama_gejala,
		);
		$this->db->where('id',$id);
		$this->db->update('tb_gejala', $data);
	}

	public function hapus($id){
		$this->db->where('id', $id);
		$this->db->delete('tb_gejala');
	}

	public function getlistkelompokgejala()
	{
		return $this->db->get('tb_klp_gejala');
	}

	function get_list_by_id($id){
         $sql = "select id,kd_gejala,nama_gejala from tb_gejala where id in (".$id.")";
         return $this->db->query($sql);
     }

     function get_list_by_idds($id){
         $sql = "select id,kd_gejala,nm_gejala,bobot from tb_gejalads where id in (".$id.")";
         return $this->db->query($sql);
     }

     function get_by_kelompok($kelompok){
        $this->db->select('*');
        $this->db->from('tb_gejala');
         $this->db->where('id_klp_gejala',$kelompok);
        return $this->db->get();
    }
}

?>