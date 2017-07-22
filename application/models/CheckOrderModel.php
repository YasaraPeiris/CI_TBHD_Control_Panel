<?php

class CheckOrderModel extends CI_Model
{
	function getNewOrders($listing_no){
		$date_val = DATE("Y-m-d");
		$this->db->select('booking.booking_id,check_in,check_out,listing_id,total_rate,item_name,room_total_rate,quantity,item_type');
		$this->db->where('listing_id', $listing_no);
		$this->db->where('confirm_hotel', '0');
		$this->db->where('check_in>=', $date_val);
		$this->db-> from('booking');
		$this->db->join('itemdetails', 'itemdetails.booking_id = booking.booking_id');
		$this->db->order_by("itemdetails.booking_id","asc");
		$this->db->order_by("item_id","asc");
		$query1 = $this->db->get();
		if ($query1-> num_rows() > 0){
			return $query1->result_array();    // return a array of object
		}	
		else{
			return NULL;	
		}

	}

    function getRecentOrders($listing_no){
        $date_val = DATE("Y-m-d");
       // $this->db->select('booking.booking_id,check_in,check_out,listing_id,total_rate,item_name,room_total_rate,quantity,item_type,booking.customer_id,customer_name');
        $this->db->select('*');
        $this->db->where('listing_id', $listing_no);
        $this->db->where('confirm_hotel', '0');
        $this->db->where('check_in>=', $date_val);
        $this->db-> from('booking');
        $this->db->join('itemdetails', 'itemdetails.booking_id = booking.booking_id');
        $this->db->join('customer', 'booking.customer_id = customer_no');
        $this->db->order_by("itemdetails.booking_id","desc");
        $this->db->order_by("room_type_id","desc");
        $query1 = $this->db->get();
        if ($query1-> num_rows() > 0){
            return $query1->result_array();    // return a array of object
        }
        else{
            return NULL;
        }

    }

	

	function getOrderHistory($listing_no){
		$date_val = DATE("Y-m-d");
		//$this->db->select('booking.booking_id,check_in,check_out,listing_id,confirm_hotel,is_paid,total_rate,item_id,item_name,room_total_rate,quantity,item_type,customer_name,nic_number,address,telephone_num,last_name,order_created_date,country,email');
        $this->db->select('*');
        $this->db->where('listing_id', $listing_no);
        $this->db->where('check_in<=', $date_val);
        $this->db-> from('booking');
        $this->db->join('itemdetails', 'itemdetails.booking_id = booking.booking_id');
        $this->db->join('customer', 'booking.customer_id = customer_no');
        $this->db->order_by("itemdetails.booking_id","desc");
        $this->db->order_by("room_type_id","desc");
        $query1 = $this->db->get();
		if ($query1-> num_rows() > 0){
			return $query1->result_array();    // return a array of object
		}	
		else{
			return NULL;	
		}

	}

	

	function add_days( $days, $from_date = null ) {
    if ( is_numeric( $from_date ) ) { 
        $new_date = $from_date; 
    } else { 
        $new_date = time();
    }

    // Timestamp is the number of seconds since an event in the past
    // To increate the value by one day we have to add 86400 seconds to the value
    // 86400 = 24h * 60m * 60s
    $new_date += $days * 86400;

    return $new_date;
}

	function getRecentCheckins($listing_no){
		$date = date("Y-m-d", strtotime("3 day"));
		$date_val = DATE("Y-m-d");
		//$this->db->select('booking.booking_id,check_in,check_out,listing_id,is_paid,total_rate,item_id,item_name,room_total_rate,quantity,item_type,customer_name,nic_number,telephone_num,last_name,order_created_date');
        $this->db->select('*');
        $this->db->where('listing_id', $listing_no);
		$this->db->where('check_in<=', $date);
		$this->db->where('check_in>=', $date_val);
		$this->db-> from('booking');
        $this->db->join('itemdetails', 'itemdetails.booking_id = booking.booking_id');
        $this->db->join('customer', 'booking.customer_id = customer_no');
        $this->db->order_by("itemdetails.booking_id","desc");
        $this->db->order_by("room_type_id","desc");
        $query1 = $this->db->get();
		if ($query1-> num_rows() > 0){
			return $query1->result_array();    // return a array of object
		}	
		else{
			return NULL;	
		}

	}

	function getListingPics($listing_no){

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