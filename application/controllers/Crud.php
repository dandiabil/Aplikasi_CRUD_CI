<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller{

    public function _construct(){
        parent::_construct();
        $this->load->model('M_crud');
    }

    public function index(){
        $data = array(
            'title' => 'Data Barang',
            'data_barang' => $this->M_crud->getAll(),
        );
        $this->load->view('data_barang', $data);
    }


}


?>