<?php
Class Login_model extends CI_Model
{
 function login($email, $password)
 {
   $this -> db -> select('email, password');
   $this -> db -> from('sign_up');
   $this -> db -> where('email', $email);
   $this -> db -> where('password', $password);
   $this -> db -> limit(1);
 
   $query = $this -> db -> get();
 
   if($query -> num_rows() == 1)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
 }
}
?>