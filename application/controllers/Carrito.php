<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carrito extends CI_Controller {

    public function __construct(){
         parent::__construct();
        if(!$this->centinel->check(2, TRUE)){
            redirect('home');
        }
        
        $this->load->model('carrito_model');
        $this->load->model('product_model');
    }


	public function index()
	{
		/*$data['principal']=$this->load->view('carrito/default', null, true);
		$this->load->view('template_carrito', $data);*/
		  /* $data = array(
                 'ci'      => $_POST['cedula'],
        //'options' => array('Size' => 'L', 'Color' => 'Red')
            );
            
            $this->cart->insert($data);
        */
        $data['principal']=$this->load->view('carrito/reader', null, true);
        $this->load->view('template_carrito', $data);
        
        
		
	}
    
    function scan(){
        
        $data = array(
        'ci'      => $_POST['cedula'],
        //'options' => array('Size' => 'L', 'Color' => 'Red')
            );
            
            $this->cart->insert($data);
        
        $data['principal']=$this->load->view('carrito/reader', null, true);
        $this->load->view('template_carrito', $data);
        
        
    }
	
	function search($code){
	    
       $carritos= $this->carrito_model->search($code);
       foreach ($carritos as $carrito) {
           echo $carrito->name;
       }
        echo $code;
        //echo $_POST['qrForm'];
        //return $data;
	    echo "carallio";
	}
    
    function add(){
        
        /* buscamos el codigo agregamos y volvemos a la escaneada */
        
        $code=$_POST['code'];
        
        $item=$this->carrito_model->search($code);
        
        //echo $item[0]->code;
        
        $data = array(
               'id'      => $item[0]->code,
               'qty'     => 1,
               'price'   => $item[0]->price_out,
               'name'    => $item[0]->name,
               'code'    => $item[0]->code,
            );

            $this->cart->insert($data); 
        //print_r($item);
        
        $data['principal']=$this->load->view('carrito/cart_view', null, TRUE);
        $this->load->view('template_carrito', $data);
        
        
    }
    
    
    function update(){
        print_r($this->cart->contents());
    }
	
}
