<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class ct_verifyLogin extends CI_Controller {
 
 function __construct()
 {
   parent::__construct();
   $this->load->model('Login_model','',TRUE);
 }
 
 function index()
 {
   //This method will have the credentials validation
   $this->load->library('form_validation');
 
   $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
   $this->form_validation->set_rules('password', 'Password', 'required|callback_check_database');
 
   if($this->form_validation->run() == FALSE)
   {
     //Field validation failed.  User redirected to login page
     $this->load->view('login');
   }
   else
   {
     //Go to private area
     redirect('ct_loginDashboard', 'refresh');
   }
 
 }
 
 function check_database($password)
 {
   //Field validation succeeded.  Validate against database
   $email = $this->input->post('email');
 
   //query the database
   $result = $this->Login_model->login($email, $password);
 
   if($result)
   {
     $sess_array = array();
     foreach($result as $row)
     {
       $sess_array = array(
            'email' => $row->email
            
       );
       $login_data = array( 'logged_in' => $sess_array );
       $this->session->set_userdata($login_data);
     }
     return TRUE;
   }
   else
   {
     $this->form_validation->set_message('check_database', 'Invalid username or password');
     return false;
   }
 }
}
?>