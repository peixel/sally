<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    function index()
    {
        $data['principal']=$this->load->view('home/login', null, true);
        $this->load->view('template', $data);
    }
    
    function control(){
        
        $centinela = new Centinel(FALSE);
       /* echo $_POST['login'];
        echo $_POST['pass'];
        exit();*/
        if($centinela->login($_POST['login'], $_POST['pass'], 0))
            redirect('acces');
        else
            redirect(base_url().'home');
    }        
    
	
	
	
	
}
