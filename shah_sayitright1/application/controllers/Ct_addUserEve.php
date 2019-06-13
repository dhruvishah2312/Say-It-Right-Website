<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ct_addUserEve extends CI_Controller {
public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }
	
	public function index()
	{
		
        $this->load->model('Eventlogin_model');
			//$data['title'] = 'Contact us';

			$this->load->library('form_validation');
			$this->form_validation->set_rules('fname','First name','required');
            $this->form_validation->set_rules('lname','Last Name','required');
            
			$this->form_validation->set_rules('email','Email','required|valid_email');
            $this->form_validation->set_rules('password','Password','required');
            
			if(!$this->form_validation->run()){

				$this->load->view('event_login');
			} else {
                $data = array(
					'f_name' => $this->input->post('fname'),
                    'l_name' => $this->input->post('lname'),
					'email' => $this->input->post('email'),
                    'r_id' => '2'
				);
                 $data1 = array(
					
					'email' => $this->input->post('email'),
					'password' => $this->input->post('password'),
                    
				);
				
				$this->Eventlogin_model->addUser($data);
                $this->Eventlogin_model->addLogin($data1);
				$this->load->view('event_login');
			}
    }
}
