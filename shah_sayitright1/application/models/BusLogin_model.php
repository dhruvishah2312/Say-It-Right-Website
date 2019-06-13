<?php
	
		class BusLogin_model extends CI_Model {
			public function _construct(){
                parent::__construct();
//				$this->load->database();
			}

			public function addUser($data) {
				
                    $this->load->database();
				  $this->db->insert('users',$data);
			}
            public function addLogin($data1) {
				
                    $this->load->database();
				  $this->db->insert('sign_up',$data1);
			}
		}
