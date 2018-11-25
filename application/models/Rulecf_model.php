<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rulecf_model extends CI_Model {

	// protected $table = 'tb_rulecf';
 //    protected $kode = 'id';

	public function daftarNilaicf(){
		
		return $this->db->select('*, tb_rulecf.id AS gpid ')
						->from('tb_rulecf')
						->join('tb_gejala', 'tb_gejala.id = tb_rulecf.id_gejala ')
						->join('tb_penyakit', 'tb_penyakit.id_p = tb_rulecf.id_penyakit ')
						->order_by('tb_rulecf.id', 'DESC')
						->get()
						->result_array();
	}

	public function insert(){
		$id_gejala = $this->input->post('id_gejala');
		$id_penyakit = $this->input->post('id_penyakit');
		$md = $this->input->post('md');
		$mb = $this->input->post('mb');

		$data = array(
					'id_gejala'=>$id_gejala,
					'id_penyakit'=>$id_penyakit,
					'md'=>$md,
					'mb'=>$mb,
				);
		$this->db->insert('tb_rulecf', $data);

	}

	public function getById($id){
		// return $query = $this->db->query("SELECT * FROM tb_rulecf WHERE id='$id' ")->row_array();
		return $query = $this->db->query("SELECT *, a.id as nid FROM tb_rulecf a JOIN tb_penyakit b ON b.id_p = a.id_penyakit WHERE a.id='$id' ")->row_array();
	}

	public function edit(){
		$id = $this->input->post('id');
		$id_gejala = $this->input->post('id_gejala');
		$id_penyakit = $this->input->post('id_penyakit');
		$mb = $this->input->post('mb');
		$md = $this->input->post('md');

		$data = array(
					'id_gejala'=>$id_gejala,
					'id_penyakit'=>$id_penyakit,
					'md'=>$md,
					'mb'=>$mb,
		);
		$this->db->where('id',$id);
		$this->db->update('tb_rulecf', $data);
	}

	public function hapus($id){
		$this->db->where('id', $id);
		$this->db->delete('tb_rulecf');
	}


	public function getlistnilaicf()
	{

		return $this->db->select('*, tb_rulecf.id AS gpid ')
						->from('tb_rulecf')
						->join('tb_gejala', 'tb_gejala.id = tb_rulecf.id_gejala ')
						->join('tb_penyakit', 'tb_penyakit.id_p = tb_rulecf.id_penyakit ')
						->get()
						->result_array();
	}

	function get_by_gejala($gejala){
		$kd=  "'" . str_replace(",", "','", $gejala) . "'";
         $sql = "select distinct id_penyakit,p.kd_penyakit,p.nama,p.keterangan from tb_rulecf gp inner join tb_penyakit p on gp.id_penyakit=p.id_p inner join tb_gejala on gp.id_gejala = tb_gejala.id where tb_gejala.kd_gejala in (".$kd.") order by id_penyakit,id_gejala";
         return $this->db->query($sql);
     }

     function get_gejala_by_penyakit($id,$gejala=null){
		$kd=  "'" . str_replace(",", "','", $gejala) . "'";
         $sql = "select distinct id_gejala,mb,md from tb_rulecf inner join tb_gejala on tb_rulecf.id_gejala = tb_gejala.id where id_penyakit=".$id;
         if($gejala!=null)
            $sql=$sql." and tb_gejala.kd_gejala in (".$kd.")";
        $sql=$sql." order by id_gejala";
         return $this->db->query($sql);
     }

  //     function get_gejala_by_penyakit($id,$gejala=null){
		// $kd=  "'" . str_replace(",", "','", $gejala) . "'";
  //        $sql = "select distinct id_gejala,mb,md from tb_rulecf where id_penyakit=".$id;
  //        if($gejala!=null)
  //           $sql=$sql." and id_gejala in (".$gejala.")";
  //       $sql=$sql." order by id_gejala";
  //        return $this->db->query($sql);
  //    }

     public function getgejala()
	{
		return $this->db->get('tb_gejala');
	}

	public function getpenyakit()
	{
		return $this->db->get('tb_penyakit');
	}

	// public function get_rulecf( $ID = null )
 //    {
 //        $query = $this->db->get_where($this->table, array ( $this->kode => $ID ));                
 //        return $query->row();
 //    }

	// public function ubah($fields, $ID)
 //    {                          
 //        $this->db->update($this->table, $fields, array($this->kode => $ID));                  
 //    }


}
