
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regist_user extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Regist_model'); //load model gejala
	}
	
	public function index()
	{
		$this->load->view('user/regist');
	}

	public function create()
	{
		if (isset($_POST['submit'])){
			$kode =  uniqid(). uniqid();

			$id = $this->Regist_model->insert($kode);
			$check = $this->Regist_model->getEmail($id);

			$pesan = 'terima kasih telah mendaftar pada sistem pakar diagnosa penyakit ginjal';
			$pesan .= '<br>';
			$pesan .= 'silahkan klik link dibawah ini utk melakukan konfirmasi akun anda ';
			$pesan .= '<br>';
			$pesan .= base_url().'regist_user/konfirmasi/'.$kode;
			$result = $this->email
						    ->from('nani.astuti.triana@gmail.com', 'SP Penyakit Ginjal')
						    ->to($check->email)
						    ->subject('Email Konfirmasi')
						    ->message($pesan)
						    ->send();
			redirect('dashboard/login');
		}
		$this->load->view('usertemp/login');
	}

	public function konfirmasi($kode){
		$check = $this->db->query("SELECT * FROM tb_user WHERE kode_verifikasi ='$kode' ")->row();
		if ($check) {
			$this->db->query("UPDATE tb_user set status = 1 WHERE id='$check->id' ");
			echo "Terima kasih telah melakukan konfirmasi. silahkan copy link dibawah ini ke browser untuk login pada akun anda";
			echo "<br>";
			echo base_url().'login_user';
		}else{
			echo "kode verifikasi salah";
		}
	}

	public function emailtest(){
		$kode =  base_url().'regist_user/konfirmasi/'.uniqid(). uniqid();
		$pesan = 'terima kasih telah mendaftar di sistem kami';
		$pesan .= '<br>';
		$pesan .= 'silahkan klik link dibawah ini utk melakukan konfirmasi ';
		$pesan .= '<br>';
		$pesan .= $kode;
		$result = $this->email
					    ->from('nani.astuti.triana@gmail.com', 'Nani Astuti Triana')
					    ->to('njcl481@gmail.com')
					    ->subject('Email Konfirmasi')
					    ->message($pesan)
					    ->send();


		var_dump($result);
		echo '<br />';
		echo $this->email->print_debugger();
	}

}