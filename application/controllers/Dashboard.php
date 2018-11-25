<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper(array('form', 'url', 'date'));
		$this->load->library(array('session'));
		$this->load->model(array('Kelompok_model', 'Rulecf_model', 'Gejala_model', 'Penyakit_model', 'diagnosa_model', 'gejalads_model', 'relasi_model'));
	}
	
	public function index()
	{
		$data['contentuser']='user/dashboard';
		$this->load->view('usertemp/index', $data);
	}

	public function admin()
	{
		$this->load->view('templates/login');
	}

	public function informasi(){
		$this->load->view('user/informasi');
	}

	public function tentang(){
		$this->load->view('user/tentang');
	}

	public function login(){
		$this->load->view('user/login');
	}


	public function diagnosa()
	{
		$user_login = $this->session->userdata('id_user');
		if($this->session->userdata('is_login') == FALSE){redirect('login_user');}

		if (!$this->input->post('gejala')) {
			$data['view'] = 'user/diagnosa/form'; //nama file yang akan jadi kontent di template
			$data['listKelompok'] = $this->Kelompok_model->get_list_data();
			$this->load->view('user/diagnosa/index', $data);

		}else{

			$data["view"]="user/diagnosa/hasil_diagnosa";
			$gejala = implode(",", $this->input->post("gejala"));

			$data["listGejala"] = $this->Gejala_model->get_list_by_id($gejala);

			//hitung
			$listPenyakit = $this->Rulecf_model->get_by_gejala($gejala);

			
			$penyakit = array();
			$i=0;
			foreach($listPenyakit->result() as $value){
				$listGejala = $this->Rulecf_model->get_gejala_by_penyakit($value->id_penyakit,$gejala);
				
			

				$combineCFmb=0;
				$combineCFmd=0;
				$CFBefore=0;
				$j=0;
				foreach($listGejala->result() as $value2){

					$j++;
					if($j==1){
						$combineCFmb=$value2->mb;
						$combineCFmd=$value2->md;
					}
					else
									$combineCFmb =$combineCFmb + ($value2->mb * (1 - $combineCFmb));
									$combineCFmd =$combineCFmd + ($value2->md * (1 - $combineCFmd));
									$combinehasil=$combineCFmb-$combineCFmd;
				}
				if($combinehasil)
				{
					$penyakit[$i]=array('kd_penyakit'=>$value->kd_penyakit,
										'nama'=>$value->nama,
										'kepercayaan'=>$combineCFmb*100,
										'hasilcf'=>$combinehasil*100,
										'tidakpercaya'=>$combineCFmd*100,
										'keterangan'=>$value->keterangan,
										'id_user'=>$user_login);
					$i++;
				}
			}

			// print_r($penyakit[0]);exit;

			function cmp($a, $b)
			{
				return ($a["hasilcf"] > $b["hasilcf"]) ? -1 : 1;
			}
			usort($penyakit, "cmp");
			$data["listPenyakit"] = $penyakit;
			$data_hasil = array(
				'id_user'=>$penyakit[0]['id_user'],
				'kd_penyakit'=>$penyakit[0]['kd_penyakit'],
				'nama_penyakit'=>$penyakit[0]['nama'],
				'kepercayaan'=>$penyakit[0]['hasilcf'],
			);

			$DIAGNOSA = $this->diagnosa_model->tampil(); 
	        $GEJALA = $this->gejalads_model->tampil(); 
	        $RELASI = $this->relasi_model->tampil();     
	        
	                  
	        $data['diagnosa'] = array();
	        foreach($DIAGNOSA as $row){
	            $data['diagnosa'][$row->kd_penyakit] = $row->nama;
	        }
	              
	        $data['gejala'] = array();
	        foreach($GEJALA as $row){
	            $data['gejala'][$row->kd_gejala] = $row;
	        }
	        $data['relasi'] = array();
	        foreach ($RELASI as $row) {                                
	            $data['relasi'][$row->kd_gejala][] = $row->kd_penyakit;                
	        }    


			$this->db->insert('tb_hasilcf', $data_hasil);

			$this->load->view('user/diagnosa/index', $data);
	       
		}
	}
}
?>
