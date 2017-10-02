<?php

class LoginModel extends CI_Model
{
	function authenticate($username,$password){
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$this->db-> from('login');
		$this->db->join('loginhotel', 'loginhotel.login_id = login.login_id','left');
		$query1 = $this->db->get();
		if ($query1-> num_rows() > 0){
			return $query1->result();    // return a array of object
		}	
		else{
			return NULL;	
		}
	}
	function LoginPics($dir, $owner_id){
		$data = array(  
			'image_path' => $dir,  
			);  
	    // log_message('debug',$owner_id);
	    // log_message('debug',$dir);
	    // log_message('debug', print_r($data,true));


		$this->db->where('owner_id', $owner_id);  
		$this->db->update("owner", $data); 
	}
}