<?php
class Relasi extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
                    
        $this->load->model('relasi_model'); 
        $this->load->model('diagnosa_model'); 
        $this->load->model('gejalads_model');       
    }

    public function index()
    {      
        $data['contents'] = 'admin/relasi'; 
        $this->load->helper('form');
        $data['DIAGNOSA'] = $this->diagnosa_model->tampil($this->input->get('search')); 
        $data['GEJALA'] = $this->gejalads_model->tampil(); 
        $data['RELASI'] = $this->relasi_model->tampil($this->input->get('search'));                                    
        $data['title'] = 'Relasi';

        $this->load->view('templates/index', $data);
    }
                    
    public function ubah( $ID = null )
    {
        $this->form_validation->set_rules( 'nama', 'Nama diagnosa', 'required' );        
        $data['title'] = 'Ubah relasi';        
        if ($this->form_validation->run() === FALSE)
        {
            $data['contents'] = 'admin/relasi_ubah';
            $data['row'] = $this->diagnosa_model->get_diagnosa($ID);
            $data['relasi'] = $this->relasi_model->get_relasi($ID);                                                
            $this->load->view('templates/index', $data);      
        }
        else
        {
            $this->relasi_model->ubah($this->input->post('relasi'), $ID);
            redirect('relasi');
        }               
    }
}