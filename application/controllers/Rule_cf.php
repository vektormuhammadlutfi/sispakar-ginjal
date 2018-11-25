<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rule_cf extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Rulecf_model'); //load model nilaicf
	}
	
	public function index()
	{
		$data['contents'] = 'admin/rule_cf'; 
		$data['kelompok_data'] = $this->Rulecf_model->daftarNilaicf();
		$this->load->view('templates/index', $data);
	}


	public function create()
	{
		if (isset($_POST['submit'])){
			$this->Rulecf_model->insert();
			redirect('rule_cf/index');
		}
		
		$data['contents'] = 'admin/rule_cf_tambah'; 
		$this->load->view('templates/index', $data);

	}

	public function edit(){
		if (isset($_POST['submit'])){
			$this->Rulecf_model->edit();
			redirect('rule_cf/index');
		}

		$id=$this->uri->segment(3);
		$data['penyakit'] = $this->db->query("SELECT * FROM tb_penyakit order by id_p")->result();
		$data['gejala'] = $this->db->query("SELECT * FROM tb_gejala order by id")->result();
		$data['nilaicf'] = $this->Rulecf_model->getById($id);
		$data['contents'] = 'admin/rule_cf_edit'; 
		$this->load->view('templates/index', $data);
	}

	public function hapus(){
		$id=$this->uri->segment(3);
		$this->Rulecf_model->hapus($id);
		redirect('rule_cf/index');

	}

	// public function ubah( $ID = null )
 //    {                     
 //        $data['contents'] = 'admin/rule_cf_edit';
 //        $this->form_validation->set_rules( 'id_gejala', 'Nama gejala', 'required' ); 
 //        $this->form_validation->set_rules( 'id_penyakit', 'Nama penyakit', 'required' ); 
 //        $this->form_validation->set_rules( 'mb', 'MB' );           
 //        $this->form_validation->set_rules( 'md', 'MD' );           
 //        $data['title'] = 'Ubah gejala';        
 //        if ($this->form_validation->run() === FALSE)
 //        {
 //            $data['row'] = $this->Rulecf_model->get_rulecf($ID);
 //            $this->load->view('templates/index', $data);      
 //        }
 //        else
 //        {
 //            $fields = array(                    
 //                'id_gejala' => $this->input->post('id_gejala'),
 //                'id_penyakit' => $this->input->post('id_penyakit'),
 //                'mb' => $this->input->post('mb'),
 //                'md' => $this->input->post('md'),
 //            );
 //            $this->Rulecf_model->ubah($fields, $ID);
 //            redirect('rule_cf');
 //        }            
 //    }
}
