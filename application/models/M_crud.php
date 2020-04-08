<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_crud extends CI_Model{

    public function get_all(){
        $this->db->select('*');
        $this->db->from('tbl_barang');
        $this->db->order_by('id_barang', 'DESC');
        $query = $this->db->get();
        return $query->result_array();
    }
    
    public function simpan_data($data){
        $query = $this->db->insert('tbl_barang', $data);
        if($query){
            return true;
        }else return false;
    }

    
}

?>