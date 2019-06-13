<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ct_addUserBus extends CI_Controller {
public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }
	
	public function index()
	{
		
        $this->load->model('BusLogin_model');
			//$data['title'] = 'Contact us';

			$this->load->library('form_validation');
			$this->form_validation->set_rules('fname','First name','required');
            $this->form_validation->set_rules('lname','Last Name','required');
            $this->form_validation->set_rules('school','School','required');
            $this->form_validation->set_rules('work','Work','required');
			$this->form_validation->set_rules('email','Email','required|valid_email');
            $this->form_validation->set_rules('password','Password','required');
            
			if(!$this->form_validation->run()){

				$this->load->view('business_login');
			} else {
                $data = array(
					'f_name' => $this->input->post('fname'),
                    'l_name' => $this->input->post('lname'),
					'email' => $this->input->post('email'),
                    'school_name' => $this->input->post('school'),
                    'place_work' => $this->input->post('work'),
                    'r_id' => '3'
				);
                 $data1 = array(
					
					'email' => $this->input->post('email'),
					'password' => $this->input->post('password'),
                    
				);
				
				$this->BusLogin_model->addUser($data);
                $this->BusLogin_model->addLogin($data1);
				$this->load->view('business_login');
			}
    }
}
