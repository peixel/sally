
<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Label_model extends CI_Model {

        public function __construct()
        {
                parent::__construct();
        }


	function save($name_product, $description, $price_in, $price_out, $qt){
			
			
		$data = array(
        'name' => $name_product,
        'description' => $description,
        'price_in' => $price_in,
        'price_out' => $price_out,
        'qt' => $qt
        
			);
			//print_r($data);
			$this->db->insert('products', $data); 
			 
		
	}

	function update($code, $id_code){
		
		$this->db->set('code', $code);
		$this->db->where('id', $id_code);
		$this->db->update('products');
		
	}
    
    function view(){
        
        $query=$this->db->get('products');
        return $query->result();
    }
    
    function label_view($id){
        $sq="SELECT * from products where id=".$id;
        $query=$this->db->query($sq);
        return $query->result_array();
    }

}