<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class History_model extends CI_Model
{
	function listHasil($id){
		return $this->db->select('*')
						->form('tb_hasilcf')
						->where('id_user', $id)
						->get()
						->result_array();
	}
	
}

