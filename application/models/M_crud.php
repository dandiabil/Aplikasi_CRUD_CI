<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_crud extends CI_Model{

    public function get_all(){
        $query = $this->db->select('*')->from('tbl_barang')->order_by('id_barang', 'DESC')->get();
        return $query->result();
    }
    
    public function simpan_data($data){
        $query = $this->db->insert('tbl_barang', $data);
        if($query){
            return true;
        }else return false;
    }

    public function edit_data($id_barang){
        $query = $this->db->where('id_barang', $id_barang)->get('tbl_barang');
        if($query){
            return $query->row();
        }else return false;
    }

    public function update_data($data, $id){
        $query = $this->db->update('tbl_barang', $data, $id);
        if($query){
            return true;
        }else return false;
    }

    public function delete_data($id){
        $query = $this->db->delete('tbl_barang', $id);
        if($query){
            return true;
        }else return false;
    }
}

?>