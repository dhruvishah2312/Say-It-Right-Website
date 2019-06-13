<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ct_setting extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }
	public function index()
	{
        $this->load->model('User_model');
        $email = $this->session->userdata['logged_in']['email'];
//        echo $sessionData;
//        $email = $sessionData['email'];
//        echo $email;
        $query = $this->User_model->getUser($email);
        $data['user'] = null;
        if($query){
            $data['user'] =  $query;
            $this->load->view('setings', $data);
        }else{
            echo "Fail";
        }
 
  
//		$this->load->view('setings');
	}
}
