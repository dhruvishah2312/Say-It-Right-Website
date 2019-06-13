<?php
	
		class User_model extends CI_Model {
			public function _construct(){
                parent::__construct();
//				$this->load->database();
			}

			public function getUser($email) {
				
                    $this->load->database();
				    $this->db->select("*");
                    $this->db->from('users');
                    $this->db->where('email', $email);
                    $query = $this->db->get();
                    return $query->result();
			}
            
            public function getRID($email){
                $this->load->database();
				    $this->db->select("r_id");
                    $this->db->from('users');
                    $this->db->where('email', $email);
                    $query = $this->db->get();
                    return $query->result();
            }
            
		}
