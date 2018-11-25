<?php
class Relasi_model extends CI_Model {

    public function tampil($search = '')
    {                           
        $query = $this->db->query("SELECT r.*
        FROM tb_relasi r                            
        ORDER BY r.kd_penyakit, r.kd_gejala");
                                
        return $query->result();
    }
    
    public function get_relasi( $kd_penyakit ) 
    {
        $relasi = $this->db->query("SELECT kd_gejala FROM tb_relasi WHERE kd_penyakit='$kd_penyakit'")->result();
        $kd_gejala = array();
        foreach($relasi as $row){
            $kd_gejala[] = $row->kd_gejala;
        }
        
        $gejala = $this->gejalads_model->tampil();
        $arr = array();
        foreach($gejala as $row_gejala){
            $arr[$row_gejala->kd_gejala] = array(
                'nm_gejala' => $row_gejala->nm_gejala,
                'related' => in_array($row_gejala->kd_gejala, $kd_gejala),
            );
        }
        return $arr;
    }
                        
    public function ubah($relasi, $kd_penyakit)
    {           
        $this->db->query("DELETE FROM tb_relasi WHERE kd_penyakit='$kd_penyakit'");
        foreach ((array)$relasi as $key => $val){                   
            $this->db->insert(
                'tb_relasi', array(
                    'kd_penyakit' => $kd_penyakit,
                    'kd_gejala' => $key,                    
                )
            ) ; 
        }                       
    }    
}