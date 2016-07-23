<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Label extends CI_Controller {


    public function __construct(){
         parent::__construct();
        if(!$this->centinel->check(0, TRUE)){
            redirect('home');
        }
        
        $this->load->model('label_model');
    }



	public function index()
	{
	    
        
        //$this->load->model('product_model');
        $data['products']=$this->label_model->view();
        
        $data['principal']=$this->load->view('label/default', $data, true);
        $this->load->view('template_admin', $data);
        
        /*
	    $this->load->model('label_model');
        $data['labels']=$this->label_model->view();
		$data['principal']=$this->load->view('label/default', $data, true);
		$this->load->view('template_label', $data);*/
	}
	
	function show(){
	    
        //echo $_POST['prod1'];
        $cont=$_POST['cont'];
        
        $labels= array();
        
        for ($i=1; $i <= $cont; $i++) {
            
                    //echo "entro";
            if(isset($_POST['prod'.$i])){
                $pila=$this->label_model->label_view($_POST['prod'.$i]);
                $code=$pila[0]['code'];
                $price=$pila[0]['price_out'];
                $num_label=$_POST['qt_label'.$i];
                for ($a=1; $a <= $num_label; $a++) {                
                    
                    array_push($labels, $code);
                    array_push($labels, $price);
                    
                }   
                
            }// controlamos que este tiqueado o no
            
        }// end for
        
        //print_r($labels);
        
        $data['labels']=$labels;
        $this->load->view('label/print_label', $data);
        
        
	}
	
	
	
}
