<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelompok_model extends CI_Model {

	public function daftarGejala(){
		return $this->db->get('tb_klp_gejala')->result();
	}

	public function insert(){
		$nama = $this->input->post('nama');
		$keterangan = $this->input->post('keterangan');

		$data = array(
						'nama'=>$nama,
						'keterangan'=>$keterangan,
				);
		$this->db->insert('tb_klp_gejala', $data);

	}

	public function getById($id_klp_gejala){
		return $query = $this->db->query("SELECT * FROM tb_klp_gejala WHERE id_klp_gejala='$id_klp_gejala' ")->row_array();
	}

	public function edit(){
		$id_klp_gejala = $this->input->post('id_klp_gejala');
		$nama = $this->input->post('nama');
		$keterangan = $this->input->post('keterangan');

		$data = array(
					'nama'=>$nama,
					'keterangan'=>$keterangan,
		);
		$this->db->where('id_klp_gejala',$id_klp_gejala);
		$this->db->update('tb_klp_gejala', $data);
	}

	public function hapus($id_klp_gejala){
		$this->db->where('id_klp_gejala', $id_klp_gejala);
		$this->db->delete('tb_klp_gejala');
	}

	function get_list_data(){
        $this->db->select('*');
        $this->db->from('tb_klp_gejala');
        return $this->db->get();
    }
}
