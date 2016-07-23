
<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Carrito_model extends CI_Model {

        public function __construct()
        {
                parent::__construct();
        }



    function search($code){
        $query = $this->db->get_where('products', array('code' => $code));
        //$query=$this->db->get('products');
        return $query->result();
    }

}