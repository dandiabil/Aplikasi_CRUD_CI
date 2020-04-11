<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('M_crud');
        $this->load->database();
        $this->load->helper('url');
    }

    public function index(){
        $data = array(
            'title' => 'Data Barang',
            'v_tampildata' => $this->M_crud->get_all(),
        );
        $this->load->view('v_tampildata', $data);
    }

        public function tambah_data(){
        $data = array(
            'title' => 'Tambah Data Barang',
        );
        $this->load->view('v_create', $data);
    }

    public function simpan_data(){
        $data = array(
            'nama_barang' => $this->input->post("nama_barang"),
            'jenis_barang' => $this->input->post("jenis_barang"),
            'harga' => $this->input->post("harga"),
            'stok' => $this->input->post("stok"),
        );

        $this->M_crud->simpan_data($data);

        redirect('Crud/');
    }

    public function edit_data($id_barang){
        $id_barang = $this->uri->segment(3);

        $data = array(
            'title' => 'Edit Data',
            'data_barang' => $this->M_crud->edit_data($id_barang),
        );
        $this->load->view('v_edit', $data);
    }

    public function update_data(){
        $id['id_barang'] = $this->input->post("id_barang");
        $data = array(
            'nama_barang' => $this->input->post("nama_barang"),
            'jenis_barang' => $this->input->post("jenis_barang"),
            'harga' => $this->input->post("harga"),
            'stok' => $this->input->post("stok"),
        );
        $this->M_crud->update_data($data, $id);
    }

    public function delete_data($id_barang){
        $id['id_barang'] = $this->uri->segment(3);
        $this->M_crud->delete_data($id);
        redirect('Crud/');
    }

}


?>