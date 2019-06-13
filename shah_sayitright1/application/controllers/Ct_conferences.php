<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ct_conferences extends CI_Controller {
public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }
	
	public function index()
	{
        $this->load->model('Events_model');
        $this->load->model('User_model');
        $email = $this->session->userdata['logged_in']['email'];
        
        $query1 = $this->Events_model->getConf();
        $query2 = $this->User_model->getRID($email);
        $data['conf'] = null;
        $data['rid'] = null;
        if($query1 && $query2){
            $data['conf'] =  $query1;
            $data['rid'] = $query2;
            $this->load->view('conferences', $data);
        }else{
            echo "No conferences scheduled";
        }
//		$this->load->view('conferences');
	}
}
