<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header('Content-Type: application/json');
class Api extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function getUser() {
        $data['username']=$this->session->userdata('username');
        echo json_encode($data);
    }
    public function auth() {
        $this->session->set_userdata('username', 'paco');
        $data['user_id']=100;
        $data['username']="paco";
        $data['user_role']="admin";
        echo json_encode($data);
    }
    public function logout() {
        $this->session->sess_destroy();
        echo json_encode(array('status'=>'200', 'message'=>'Session destroyed.'));
    }
}
