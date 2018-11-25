<?php
class Diagnosa_model extends CI_Model {
    
    protected $table = 'tb_penyakit';
    protected $kode = 'kd_penyakit';
    
    public function tampil( $search='')
    {                
        $this->db->like( $this->kode, $search );
        $this->db->or_like( 'nama', $search );
        $this->db->or_like( 'keterangan', $search );        
        $this->db->order_by( $this->kode );
        $query = $this->db->get($this->table);
        return $query->result();
    }
    
    public function get_diagnosa( $ID = null )
    {
        $query = $this->db->get_where($this->table, array ( $this->kode => $ID ));                
        return $query->row();
    }
            
    public function tambah($fields)
    {
        $this->db->insert($this->table, $fields);      
    }
    
    public function ubah($fields, $ID)
    {                          
        $this->db->update($this->table, $fields, array($this->kode => $ID));                  
    }
    
    public function hapus( $ID )
    {
        $this->db->delete($this->table, array($this->kode=> $ID));
        $this->db->delete('tb_relasi', array($this->kode=> $ID));
    }
}