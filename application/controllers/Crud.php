<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller{

    public function _construct(){
        parent::_construct();
        $this->load->model('M_crud');
    }

    
}


?>