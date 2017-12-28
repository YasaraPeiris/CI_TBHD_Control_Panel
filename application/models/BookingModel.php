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
	function delete_booking($booking_id,$room_type_id){
        $this->db->select('quantity');
        $this->db->where('booking_id', $booking_id);
        $this->db->where('room_type_id', $room_type_id);
        $this->db->from('itemdetails');
        $query1 = $this->db->get();
        $ret = $query1->row();
        if($ret->quantity>1){
            $data = array(
                'quantity' => $ret-1,
            );
            $this->db->where('booking_id', $booking_id);
            $this->db->where('room_type_id', $room_type_id);
            $this->db->update('itemdetails', $data);


        }else{
            $this->db->where('booking_id', $booking_id);
            $this->db->where('room_type_id', $room_type_id);
            $this->db->delete('itemdetails');

            $this->db->where('booking_id', $booking_id);
            $this->db->from('itemdetails');
            $query1 = $this->db->get();
            if ($query1->num_rows() <= 0) {
                $this->db->where('booking_id', $booking_id);
                $this->db->delete('booking');
            }
        }

    }





}
