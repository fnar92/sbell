<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header('Content-Type: application/json');
class Auth extends CI_Controller {
    
    private $idUser;
    private $typeUser;
    private $username;
    
    public function __construct() {
        parent::__construct();
    }
    
    public function login() {
        $params = json_decode(file_get_contents('php://input'),true);
        $username = $params['username'];
        $password = $params['password'];
        $login=$this->auth_model->auth($username, $password);
        if($login){
            $this->idUser= $this->session->userdata('user_id');
            $this->typeUser= $this->session->userdata('user_type');
            $this->username= $this->session->userdata('username');
            $s=$this->user_model->getUser($this->idUser, $this->typeUser);
           
            $response=array(
                'status'=>200,
                'msg'=>'found_user',
                'userdata'=>$login
            );
        }else{
            $response['status']=404;
            $response['msg']='not_found_user';
        }
        echo json_encode($response);
    }
    
    public function logout() {
        $this->session->sess_destroy();
        echo json_encode(array('status'=>'200', 'message'=>'Session destroyed.'));
    }
}
