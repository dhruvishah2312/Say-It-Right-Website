<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ct_sendContact extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }
	
	public function index()
	{
		$this->load->model('Contactus_model');
			//$data['title'] = 'Contact us';

			$this->load->library('form_validation');
			$this->form_validation->set_rules('fname','First name','required');
            $this->form_validation->set_rules('lname','Last Name','required');
			$this->form_validation->set_rules('message','Message','required');
			$this->form_validation->set_rules('phone','Phone','required');
            
			if(!$this->form_validation->run()){

				$this->load->view('Contactus');
			} else {
                $data = array(
					'f_name' => $this->input->post('fname'),
                    'l_name' => $this->input->post('lname'),
					'message' => $this->input->post('message'),
					'phone' => $this->input->post('phone')
				);
				$this->Contactus_model->addContact($data);
				$this->load->view('Contactus');
			}
	}
}