<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ct_individiuallogin extends CI_Controller {
public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }
	
	public function index()
	{
		$this->load->view('individual_login');
        $this->load->library('form_validation');
	}
    public function sendData(){
        $this->load->model('Individuallogin_model');
			//$data['title'] = 'Contact us';

			$this->load->library('form_validation');
			$this->form_validation->set_rules('fname','First name','required');
            $this->form_validation->set_rules('lname','Last Name','required');
			$this->form_validation->set_rules('email','Email','required');
			$this->form_validation->set_rules('school','School','required');
            $this->form_validation->set_rules('work','Work','required');
            $this->form_validation->set_rules('password','Password','required');
            
			if(!$this->form_validation->run()){

				$this->load->view('individual_login');
			} else {
                $data = array(
					'f_name' => $this->input->post('fname'),
                    'l_name' => $this->input->post('lname'),
					'email' => $this->input->post('email'),
					'school' => $this->input->post('school'),
                    'work' => $this->input->post('work')
				);
				$this->Contactus_model->addUser($data);
				$this->load->view('individual_login');
			}
    }
}
