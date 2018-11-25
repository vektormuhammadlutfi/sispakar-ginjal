<?php

class Penyakit_model extends CI_Model {
	

	public function daftarPenyakit(){
		return $this->db->get('tb_penyakit')->result();
	}

	function detail_gangguan($id){
		$qgangguan=$this->db->get_where('tb_penyakit',array('id_p'=>$id));
		foreach ($qgangguan->result() as $dgangguan){
			$data['id_p']=$dgangguan->id;
			$data['nama']=$dgangguan->gangguan;
			$data['keterangan']=$dgangguan->keterangan;
		}
	return $data;
	}
	
	public function insert(){
		$kd_penyakit = $this->input->post('kd_penyakit');
		$nama = $this->input->post('nama');
		$keterangan = $this->input->post('keterangan');
	
	$data = array(
					'kd_penyakit'=>$kd_penyakit,
					'nama'=>$nama,
					'keterangan'=>$keterangan,
			);
	$this->db->insert('tb_penyakit', $data);
	
	}

	public function getById($id_p){
		return $query = $this->db->query("SELECT * FROM tb_penyakit WHERE id_p='$id_p' ")->row_array();

	}

	public function edit(){
		$id_p = $this->input->post('id_p');
		$kd_penyakit = $this->input->post('kd_penyakit');
		$nama = $this->input->post('nama');
		$keterangan = $this->input->post('keterangan');

		$data = array(
					'kd_penyakit'=>$kd_penyakit,
					'nama'=>$nama,
					'keterangan'=>$keterangan,
		);
		$this->db->where('id_p',$id_p);
		$this->db->update('tb_penyakit', $data);
	}

	public function hapus($id_p){
		$this->db->where('id_p', $id_p);
		$this->db->delete('tb_penyakit');
	}
}
?>