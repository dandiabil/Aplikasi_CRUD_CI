<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller{

    public function _construct(){
        parent::_construct();
        $this->load->database();
        $this->load->helper('url_helper');
        $this->load->model('M_crud');
        $this->load->helper('form');
        $this->load->library('form_validation');
    }

    public function index(){
        
    }
}


?>