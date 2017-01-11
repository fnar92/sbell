<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header('Content-Type: application/json');
class User extends CI_Controller {
    
    private $idUser;
    private $typeUser;
    private $username;
    
    public function __construct() {
        parent::__construct();
        if(!$this->session->userdata('user_id')){
            exit('not_session');
        }
    }
    
    public function getUser($id, $type) {
        echo json_encode($this->user_model->getUser($id, $type));
    }
    
    
}
