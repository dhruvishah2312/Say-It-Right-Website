<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

	class Ct_contactus extends CI_Controller {
		
        public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }
		public function index() {
            
			$this->load->view('Contactus');
            $this->load->library('form_validation');
		}
        
//        public function sendContact(){
//            $this->load->model('Contactus_model');
//			$data['title'] = 'Contact us';
//
//			$this->load->library('form_validation');
//			$this->form_validation->set_rules('fname','First name','required');
//            $this->form_validation->set_rules('lname','Last Name','required');
//			$this->form_validation->set_rules('message','Message','required');
//			$this->form_validation->set_rules('phone','Phone','required');
//
//			if(!$this->form_validation->run()){
//
//				$this->load->view('Contactus');
//			} else {
//				$this->Contactus_model->addContact();
//				$this->load->view('Contactus');
//			}
//			
//        }

		
	}