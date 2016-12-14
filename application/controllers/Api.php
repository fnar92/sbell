<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header('Content-Type: application/json');
class Api extends CI_Controller {
    
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
        $login=$this->user_model->auth($username, $password);
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
        //echo json_encode($params);
    }
    public function getUser() {
        $data['userdata']=  $this->user_model->getUser($this->idUser, $this->typeUser);
        echo json_encode($data);
    }
    public function auth() {
        $this->session->set_userdata('username', 'fnar');
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
