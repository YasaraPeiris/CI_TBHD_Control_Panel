<?php

class RoomModel extends CI_Model
{
	function getRoomDetails($listing_id){
		$this->db->where('listing_id', $listing_id);
		$this->db-> from('roomtypes');
		$query1 = $this->db->get();
		if ($query1-> num_rows() > 0){
			return $query1->result();    // return a array of object
		}	
		else{
			return NULL;	
		}
	}

	function getRoomPics($listing_id,$roomtype_id){
		$this->db->where('listing_id', $listing_id);
		$this->db->where('room_type_id', $roomtype_id);
		$this->db-> from('roompics');
		$query1 = $this->db->get();
		if ($query1-> num_rows() > 0){
			return $query1->result();    // return a array of object
		}	
		else{
			return NULL;	
		}
	}
}