<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		//$this->load->view('qr/default');
		
		/*
		$cadena="jorge camacho";
		
		$trozo=explode(" ", $cadena);
		$array_num= count($trozo);
		
		for ($i=0; $i <= $array_num-1 ; $i++) { 
			echo $trozo[$i][0];
		}*/
		
		//$data['principal']=$this->load->view('product/default', null, true);
		$this->load->view('qr/default');
		
	}
	
	
	
}
