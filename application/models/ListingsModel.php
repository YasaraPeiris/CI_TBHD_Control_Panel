<?php

class ListingsModel extends CI_Model
{
	function getListingDetails($listing_no){
		$this->db->where('listing_id', $listing_no);
		$this->db-> from('listings');
		$query1 = $this->db->get();
		if ($query1-> num_rows() > 0){
			return $query1->result();    // return a array of object
		}	
		else{
			return NULL;	
		}
	}

	function getListingPic($listing_no){
		$this->db->where('listing_id', $listing_no);
		$this->db-> from('listingpics');
		$query1 = $this->db->get();
		if ($query1-> num_rows() > 0){
			return $query1->result();    // return a array of object
		}	
		else{
			return NULL;	
		}
	}
}