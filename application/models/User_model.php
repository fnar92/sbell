<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function auth($username, $password) {
        $password1 = sha1($password);
        $this->db->select('id, username, rol, 1 as user_type');
        $this->db->where('username', $username);
        $this->db->where('password', $password1);
        $query=$this->db->get('sb_admin');
        if($query->num_rows()==1){
            $this->session->set_userdata('user_id', $query->row()->id);
            $this->session->set_userdata('user_type', 1);
            $this->session->set_userdata('username', $query->row()->username);
            return $query->row();
        }else{
            $this->db->select('id, username, rol, 1 as user_type');
            $this->db->where('email', $username);
            $this->db->where('password', $password);
            $query=$this->db->get('sb_admin');
            if($query->num_rows()==1){
                $this->session->set_userdata('user_id', $query->row()->id);
                $this->session->set_userdata('user_type', 1);
                $this->session->set_userdata('username', $query->row()->username);
                return $query->row();
            }else{
                $this->db->select('id, username, 0 as rol, 2 as user_type');
                $this->db->where('username', $username);
                $this->db->where('password', $password);
                $query=$this->db->get('sb_customer');
                if($query->num_rows()==1){
                    $this->session->set_userdata('user_id', $query->row()->id);
                    $this->session->set_userdata('user_type', 2);
                    $this->session->set_userdata('username', $query->row()->username);
                    return $query->row();
                }else{
                    $this->db->select('id, username, 0 as rol, 2 as user_type');
                    $this->db->where('email', $username);
                    $this->db->where('password', $password);
                    $query=$this->db->get('sb_customer');
                    if($query->num_rows()==1){
                        $this->session->set_userdata('user_id', $query->row()->id);
                        $this->session->set_userdata('user_type', 2);
                        $this->session->set_userdata('username', $query->row()->username);
                        return $query->row();
                    }
                }
            }
        }
        return false;
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
