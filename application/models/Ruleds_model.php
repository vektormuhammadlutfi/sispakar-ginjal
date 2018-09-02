<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ruleds_model extends CI_Model {

	public function daftarNilaids(){
		
		return $this->db->select('*, tb_ruleds.id AS gpid ')
						->from('tb_ruleds')
						->join('tb_gejala', 'tb_gejala.id = tb_ruleds.id_gejala ')
						->join('tb_penyakit', 'tb_penyakit.id_p = tb_ruleds.id_penyakit ')
						->get()
						->result_array();
	}

	public function insert(){
		$id_gejala = $this->input->post('id_gejala');
		$id_penyakit = $this->input->post('id_penyakit');
		$bobot = $this->input->post('bobot');

		$data = array(
					'id_gejala'=>$id_gejala,
					'id_penyakit'=>$id_penyakit,
					'bobot'=>$bobot,
				);
		$this->db->insert('tb_ruleds', $data);

	}

	public function getById($gpid){
		return $query = $this->db->query("SELECT * FROM tb_ruleds WHERE id='$gpid' ")->row_array();

	}

	public function edit(){
		$gpid = $this->input->post('id');
		$id_gejala = $this->input->post('id_gejala');
		$id_penyakit = $this->input->post('id_penyakit');
		$bobot = $this->input->post('bobot');

		$data = array(
					'id_gejala'=>$id_gejala,
					'id_penyakit'=>$id_penyakit,
					'bobot'=>$bobot,
		);
		$this->db->where('id',$gpid);
		$this->db->update('tb_ruleds', $data);
	}

	public function hapus($id){
		$this->db->where('id', $id);
		$this->db->delete('tb_ruleds');
	}

	public function getgejala()
	{
		return $this->db->get('tb_gejala');
	}

	public function getpenyakit()
	{
		return $this->db->get('tb_penyakit');
	}


	public function getlistnilaids()
	{

		return $this->db->select('*, tb_ruleds.id AS gpid ')
						->from('tb_ruleds')
						->join('tb_gejala', 'tb_gejala.id = tb_ruleds.id_gejala ')
						->join('tb_penyakit', 'tb_penyakit.id_p = tb_ruleds.id_penyakit ')
						->get()
						->result_array();
	}

	function get_by_gejala($gejala){
         $sql = "select distinct id_penyakit,p.kd_penyakit,p.nama,p.keterangan from tb_ruleds gp inner join tb_penyakit p on gp.id_penyakit=p.id_p where id_gejala in (".$gejala.") order by id_penyakit,id_gejala";
         return $this->db->query($sql);
     }

     function get_gejala_by_penyakit($id,$gejala=null){
         $sql = "select distinct id_gejala,mb,md from tb_ruleds where id_penyakit=".$id;
         if($gejala!=null)
            $sql=$sql." and id_gejala in (".$gejala.")";
        $sql=$sql." order by id_gejala";
         return $this->db->query($sql);
     }
}
