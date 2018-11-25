<?php
class Hitung extends CI_Controller{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('diagnosa_model');
        $this->load->model('gejalads_model');
        $this->load->model('relasi_model');      
        $this->load->model('Penyakit_model');      
    }
    
    public function index()
    {        
        $user_login = $this->session->userdata('id_user');
        if($this->session->userdata('is_login') == FALSE){redirect('login_user');}

        $data['title'] = 'Perhitungan';
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
        
        $this->form_validation->set_rules( 'gejala[]', 'Gejala', 'required' );
                
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('user/diagnosads/hitung_form', $data);            
        }
        else
        {
            $this->load->view('user/diagnosads/hitung_hasil', $data);            
        }        
    }    

    public function solusi(){
        $data['penyakit_data'] = $this->Penyakit_model->daftarPenyakit();
        $this->load->view('user/diagnosads/solusi', $data);
    }    
    
    public function cetak()
    {        
        $data['title'] = 'Perhitungan';
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
        load_view_cetak('hitung_cetak', $data);                            
    }    
}