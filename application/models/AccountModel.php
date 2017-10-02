<?php
class AccountModel extends CI_Model
{

	function getAccountDetails($listing_no){

		$this->db->select('first_name,last_name,image_path,owner.email,owner.mobile,owner.listing_type,owner.owner_id,username,password,login.login_id');
		$this->db->where('listings.listing_id', $listing_no);
		$this->db-> from('listings');
		$this->db->join('owner', 'listings.owner_id = owner.owner_id');
		$this->db->join('loginhotel', 'loginhotel.listing_id = listings.listing_id');
		$this->db->join('login', 'loginhotel.login_id = login.login_id');
		
		$query1 = $this->db->get();
		if ($query1-> num_rows() > 0){
			return $query1->result();    // return a array of object
		}	
		else{
			return NULL;	
		}

	}

	// function logPersonalDetails($owner_id){
	// 	// $DB1 = $this->load->database('default', TRUE);
	// 	$DB2 = $this->load->database('log_db', TRUE);

	// 	$DB2 -> where('owner_id',$owner_id) ;
	// 	$DB2 -> from('owner');
	// 	$query1 = $DB2 ->get();
	// 	if ($query1-> num_rows() > 0){
	// 		return $query1->result();    // return a array of object
	// 	}	
	// 	else{
	// 		return NULL;	
	// 	}

	//     log_message('debug', print_r($query1, true));

	    

	// }

	function editPersonalDetails($results,$owner_id){
		$this->db->where('owner_id', $owner_id);  
		$this->db->update("owner", $results);
	}


	function editAccountDetails($results,$login_id){
		$this->db->where('login_id', $login_id);  
		$this->db->update("login", $results);  
	}
}