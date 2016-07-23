<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

    public function __construct(){
         parent::__construct();
        if(!$this->centinel->check(0, TRUE)){
            redirect('home');
        }
        
        $this->load->model('product_model');
    }

	public function index()
	{
		$data['principal']=$this->load->view('product/default', null, true);
		$this->load->view('template_admin', $data);
	}
	
	
	function save(){
		//echo "hola";
		$code="";
		$this->load->model('product_model');
		
		
		
		$this->product_model->save(rtrim($_POST['name_product']), $_POST['description'], $_POST['price_in'], $_POST['price_low'], $_POST['price_out'], $_POST['qt'] );
		
		//$caracter=explode(" ", $_POST['name_product']);
		
		
		$id_code=$this->db->insert_id();
		
		$caracter=$_POST['name_product'];
		
		$trozo=explode(" ", $caracter);
		$array_num= count($trozo);
		
		for ($i=0; $i <= $array_num-1 ; $i++) { 
			$code= $code.$trozo[$i][0];
		}
		
		$code=$code.$id_code;
		$this->product_model->update($code, $id_code);
		redirect(base_url()."product/print_label/".$code);
	}
		
	
	function print_label($id){
		
	    //set it to writable location, a place for temp generated PNG files
	    $PNG_TEMP_DIR = 'qr/';
	    
	    //html PNG location prefix
	    $PNG_WEB_DIR = 'qr/';
		
		//$data['code']=$id;
		$errorCorrectionLevel="H";
		$matrixPointSize="5";
		
		$filename = $PNG_TEMP_DIR.$id.'.png';
		QRcode::png($id, $filename, $errorCorrectionLevel, $matrixPointSize, 2);   
		
		//$this->load->view("product/print_label", $data);
		redirect(base_url().'product/view');
	}
		
	
    function view(){
        
        $data['products']=$this->product_model->view();
        
        $data['principal']=$this->load->view('product/list', $data, true);
        $this->load->view('template_admin', $data);
        
        
    }
    
    function del($id){
        $this->load->model('product_model');
        $this->product_model->del($id);
        redirect(base_url().'product/view');
    }
    
	function update_list(){
	    for ($i=1; $i <=$_POST['iqt'] ; $i++) {
	        
            //aqui vamos guardando
            $this->product_model->update_list($_POST['qt'.$i], $_POST['pin'.$i], $_POST['pout'.$i], $_POST['plow'.$i], $_POST['id'.$i] );
			
		}

        redirect(base_url()."product/view");
	}
    
    function inventario(){
            
        $data['products']=$this->product_model->view();
        
        $data['principal']=$this->load->view('product/inventario', $data, true);
        $this->load->view('template_admin', $data);
        
    }
}
