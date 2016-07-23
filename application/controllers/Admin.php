<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct(){
         parent::__construct();
        if(!$this->centinel->check(0, TRUE)){
            redirect('home');
        }
        
        $this->load->model('product_model');
    }

	
    function index(){
        
        $this->load->model('product_model');
        $data['products']=$this->product_model->view();
        
        $data['principal']=$this->load->view('product/list', $data, true);
        $this->load->view('template_admin', $data);
        
        
    }
    
	
}
