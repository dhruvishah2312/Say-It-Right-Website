<?php
	
		class Events_model extends CI_Model {
			public function _construct(){
                parent::__construct();
//				$this->load->database();
			}

			public function getEvents() {
				
                    $this->load->database();
				    $this->db->select("*");
                    $this->db->from('event');
                    $query = $this->db->get();
                    return $query->result();
			}
            
            public function getConf(){
                $this->load->database();
				    $this->db->select("*");
                    $this->db->from('conference');
                    $query = $this->db->get();
                    return $query->result();
                
            }
            
		}
