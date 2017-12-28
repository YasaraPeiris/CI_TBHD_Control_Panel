<?php
class BookingModel extends CI_Model
{
	function place_booking($data)
	{
		$this->db-> insert('booking',$data);
		
	}
	function place_room($data)
	{
		$this->db-> insert('itemdetails',$data);
		
	}





}
