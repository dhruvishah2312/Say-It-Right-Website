<?php
	
		class Contactus_model extends CI_Model {
			public function _construct(){
                parent::__construct();
//				$this->load->database();
			}

			public function addContact($data) {
				
                    $this->load->database();
				  $this->db->insert('contact_us',$data);
			}
		}
