<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ct_new extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model('new_model');
        $this->load->view('new');
	}
    
    public function sendEvent(){
        $this->load->model('new_model');
			//$data['title'] = 'Contact us';
            $email = $this->session->userdata['logged_in']['email'];
			$this->load->library('form_validation');
			$this->form_validation->set_rules('eName','Event name','required');
            $this->form_validation->set_rules('eDesc','Event Description','required');
			
			if(!$this->form_validation->run()){

				$this->load->view('events');
			} else {
                $data = array(
					'r_id' => '2',
                    'email' => $email,
					'eName' => $this->input->post('eName'),
					'eDesc' => $this->input->post('eDesc')
				);
				$this->new_model->addEvent($data);
				$this->load->view('new');
			}
    }
    
     public function updateEvent(){
        $this->load->model('new_model');
			//$data['title'] = 'Contact us';
            $email = $this->session->userdata['logged_in']['email'];
			$this->load->library('form_validation');
            $this->form_validation->set_rules('ID','ID','required');
			$this->form_validation->set_rules('eName','Event name','required');
            $this->form_validation->set_rules('eDesc','Event Description','required');
			
			if(!$this->form_validation->run()){

				$this->load->view('events');
			} else {
                $data = array(
                    'e_id' =>$this->input->post('ID'),
					'r_id' => '2',
                    'email' => $email,
					'eName' => $this->input->post('eName'),
					'eDesc' => $this->input->post('eDesc')
				);
				$this->new_model->upEvent($data);
				$this->load->view('update');
			}
    }
     public function updateConf(){
        $this->load->model('new_model');
			//$data['title'] = 'Contact us';
            $email = $this->session->userdata['logged_in']['email'];
			$this->load->library('form_validation');
            $this->form_validation->set_rules('ID','ID','required');
			$this->form_validation->set_rules('eName','Conf name','required');
            $this->form_validation->set_rules('eDesc','Conf Description','required');
			
			if(!$this->form_validation->run()){

				$this->load->view('conferences');
			} else {
                $data = array(
                    'e_id' =>$this->input->post('ID'),
					'r_id' => '3',
                    'email' => $email,
					'eName' => $this->input->post('eName'),
					'eDesc' => $this->input->post('eDesc')
				);
				$this->new_model->upConf($data);
				$this->load->view('updateBus');
			}
    }
    public function deleteEvent(){
        $this->load->model('new_model');
			//$data['title'] = 'Contact us';
            $email = $this->session->userdata['logged_in']['email'];
			$this->load->library('form_validation');
            $this->form_validation->set_rules('ID','ID','required');
			
			
			if(!$this->form_validation->run()){

				$this->load->view('events');
			} else {
                $data = array(
                    'e_id' =>$this->input->post('ID')
					
				);
				$this->new_model->delEvent($data);
				$this->load->view('delete');
			}
    }
    public function deleteConf(){
        $this->load->model('new_model');
			//$data['title'] = 'Contact us';
            $email = $this->session->userdata['logged_in']['email'];
			$this->load->library('form_validation');
            $this->form_validation->set_rules('ID','ID','required');
			
			
			if(!$this->form_validation->run()){

				$this->load->view('conferences');
			} else {
                $data = array(
                    'e_id' =>$this->input->post('ID')
					
				);
				$this->new_model->delConf($data);
				$this->load->view('deleteBus');
			}
    }
	}

