<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_model extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get_all()
	{
		$results = array();
        $query = $this->db->query('SELECT hasil.id,hasil.id_user,users.nama,hasil.kd_kulit,
									kulit.nama_kulit,hasil.kondisi,hasil.waktu FROM
									hasil INNER JOIN users ON hasil.id_user = users.id_user
									INNER JOIN kulit ON hasil.kd_kulit = kulit.id_kulit
								');
        if ($query->num_rows() > 0) {
                return $query->result();
        return $results;
		}
	}


	public function get_by_id($id)
	{
		$this->db->from('solusi_produk');
		$this->db->where('id',$id);
		$query = $this->db->get();

		return $query->row();
	}

	public function solusi_produk_add($data)
	{
		$this->db->insert('solusi_produk', $data);
		return $this->db->insert_id();
	}

	public function solusi_produk_update($where, $data)
	{
		$this->db->update('solusi_produk', $data, $where);
		return $this->db->affected_rows();
	}

	public function delete_by_id($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('solusi_produk');
	}

}