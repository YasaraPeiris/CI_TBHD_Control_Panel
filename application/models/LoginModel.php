<?php

class LoginModel extends CI_Model
{
	function authenticate($username,$password){
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$this->db-> from('login');
		$query1 = $this->db->get();
		if ($query1-> num_rows() > 0){
			return $query1->result();    // return a array of object
		}	
		else{
			return NULL;	
		}
	}
}