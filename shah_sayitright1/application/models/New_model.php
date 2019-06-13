<?php
	
		class New_model extends CI_Model {
			public function _construct(){
                parent::__construct();
//				$this->load->database();
			}

			public function addEvent($data) {
				
                    $this->load->database();
				  $this->db->insert('event',$data);
			}
            public function addConf($data) {
				
                    $this->load->database();
				  $this->db->insert('conf',$data);
			}
            public function upEvent($data) {
				
                    $this->load->database();
				  $this->db->replace('event',$data);
			}
            public function upConf($data) {
				
                    $this->load->database();
				  $this->db->replace('conf',$data);
			}
            public function delConf($data) {
				
                    $this->load->database();
				  $this->db->delete('conf',$data);
			}
            public function delEvent($data) {
				
                    $this->load->database();
				  $this->db->delete('event',$data);
			}
            
		}
