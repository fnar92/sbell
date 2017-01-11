<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function getUser($id, $type) {
        if($type==1){
            $this->db->where('id', $id);
            return $this->db->get('sb_admin')->row();
        }else if($type==2){
            $this->db->where('id', $id);
            return $this->db->get('sb_customer')->row();
        }
       
    }
    
}
