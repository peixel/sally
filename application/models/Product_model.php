<?php


class Product_model extends CI_Model {


	function save($name_product, $description, $price_in, $price_low, $price_out, $qt){
			
			
		$data = array(
        'name' => $name_product,
        'description' => $description,
        'price_in' => $price_in,
        'price_low' => $price_low,
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
       
       function del($id){
               
         $this->db->delete('products', array('id' => $id)); 
         /*$this->db->delete('local', array('id_cliente' => $id)); 
         $this->db->delete('pay', array('id_cliente' => $id)); */
    
           
       }
       
       function update_list($qt, $pin, $pout, $plow, $id){
           
            $data = array(
                           'qt' => $qt,
                           'price_in' => $pin,
                           'price_out' => $pout,
                           'price_low' => $plow
                       
                        );
            
            $this->db->where('id', $id);
            $this->db->update('products', $data);            
       }
       
}