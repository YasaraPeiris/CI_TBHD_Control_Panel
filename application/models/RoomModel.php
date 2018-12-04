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
    function get_roomcat($listing_id, $room_type_id)
    {
        $this->db->where('listing_id', $listing_id);
        $this->db->where('room_type_id', $room_type_id);
        $this->db->from('roompricecategory');
        $this->db->order_by('room_type_id','asc');
        $query1 = $this->db->get();
        if ($query1-> num_rows() > 0){
            return $query1->result();    // return a array of object
        }   
        else{
            return NULL;    
        }
    }
    function get_baseroomprice($pricecategory_id)
    {
        $this->db->where('pricecategory_id', $pricecategory_id);
        $this->db->from('roomprices');
        $this->db->order_by('id','asc');
        $query1 = $this->db->get();
        if ($query1-> num_rows() > 0){
            return $query1->result();    // return a array of object
        }   
        else{
            return NULL;    
        }
    }
    function update_pricecat_occ($pricecategory_id, $occ)
    {
        $this->db->where('pricecategory_id',$pricecategory_id);
        $this->db->update('roompricecategory',array('price_occ'=> $occ));
    }
    function update_baseroomprice($id, $price)
    {
        $this->db->where('id',$id);
        $this->db->update('roomprices',array('price'=> $price));
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
    function addRoomType($data)
    {       
        $this->db-> insert('roomtypes',$data);
    }
    function addRoomPic($data)
    {       
        $this->db-> insert('roompics',$data);
    }
    function addPriceCat($data)
    {       
        $this->db-> insert('roompricecategory',$data);
        return $this->db->insert_id();
    }
    function savePriceData($data)
    {       
        $this->db-> insert('roomprices',$data);
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