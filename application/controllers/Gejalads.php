<?php
class Gejalads extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Gejalads_model');           
    }

    public function index()
    {      
        $data['contents'] = 'admin/gejalads';
        $data['rows'] = $this->Gejalads_model->tampil($this->input->get('search'));
        // $data['title'] = 'Data gejala';
        $this->load->view('templates/index', $data);
    }
    
    public function tambah() 
    {            
        $data['contents'] = 'admin/gejalads_tambah';
        $this->form_validation->set_rules( 'kd_gejala', 'Kode gejala', 'required|is_unique[tb_gejalads.kd_gejala]' );
        $this->form_validation->set_rules( 'nm_gejala', 'Nama gejala', 'required' );     
        $this->form_validation->set_rules( 'bobot', 'Bobot' );        
        $data['title'] = 'Tambah gejala';        
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/index', $data);     
        }
        else
        {
            $fields = array(
                'kd_gejala' => $this->input->post('kd_gejala'),
                'nm_gejala' => $this->input->post('nm_gejala'),
                'bobot' => $this->input->post('bobot'),
            );
            $this->Gejalads_model->tambah($fields);
            redirect('gejalads');
        }                        
    }
            
    public function ubah( $ID = null )
    {                     
        $data['contents'] = 'admin/gejalads_ubah';
        $this->form_validation->set_rules( 'nm_gejala', 'Nama gejala', 'required' ); 
        $this->form_validation->set_rules( 'bobot', 'Bobot' );           
        $data['title'] = 'Ubah gejala';        
        if ($this->form_validation->run() === FALSE)
        {
            $data['row'] = $this->Gejalads_model->get_gejala($ID);
            $this->load->view('templates/index', $data);      
        }
        else
        {
            $fields = array(                    
                'nm_gejala' => $this->input->post('nm_gejala'),
                'bobot' => $this->input->post('bobot'),
            );
            $this->Gejalads_model->ubah($fields, $ID);
            redirect('gejalads');
        }            
    }
    
    public function hapus( $ID = null )
    {
        $this->Gejalads_model->hapus($ID);
        redirect('gejalads');
    }
    
    // public function cetak( $search ='' )
    // {
    //     $data['rows'] = $this->Gejalads_model->tampil($search);
    //     load_view_cetak('gejala_cetak', $data);
    // }
}