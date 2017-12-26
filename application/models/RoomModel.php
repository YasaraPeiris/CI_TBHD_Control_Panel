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

	function updateRoomDetails($data,$listing_id,$roomtype_id){
        $this->db->where('listing_id',$listing_id);
        $this->db->where('room_type_id',$roomtype_id);
        if( $this->db->update('roomtypes',$data))
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    function getRoomImages($listing_id){
        $this->db->where('listing_id', $listing_id);
        $this->db-> from('roompics');
        $query1 = $this->db->get();
        if ($query1-> num_rows() > 0){
            return $query1->result();    // return a array of object
        }
        else{
            return NULL;
        }
    }

    function updateRoomPics($image_id, $image_loc)
    {
        print_r("update Listing pics");
//        $this->db->where('listing_pic_id', $image_id);
//        $this->db->update('listingpics', array('image_path' => $image_loc));
//        return true;
    }

    function addRoomPics($image_id)
    {
        //include the code for adding a pic
        print_r("add new image");
    }

    function deleteRoomPics($roomPic_id){
        $this->db->delete('roompics', array('roompic_id' => $roomPic_id));
    }
}