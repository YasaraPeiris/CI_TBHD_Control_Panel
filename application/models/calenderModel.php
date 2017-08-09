<?php
/**
 * Created by The Best Hotel Deal.
 * User: Wenuka_Guneratne_&_Yasara_Peiris
 * Date: 8/4/2017
 * Time: 8:34 AM
 */
class CalenderModel extends CI_Model
{
    function getRoomTypes($listing_id)
    {
        $this->db->select('room_type_id AS id, room_type_id AS value,room_name AS label');
        $this->db->where('listing_id', $listing_id);
        $this->db->from('roomtypes');
        $query1 = $this->db->get();
        if ($query1->num_rows() > 0) {
            return $query1->result();    // return a array of object
        } else {
            return NULL;
        }
    }

    function getRooms($listing_id)
    {
        $this->db->select('room_type_id AS id, room_type_id AS value,room_name AS label,room_type_id AS type,status_cal AS status');
        $this->db->where('listing_id', $listing_id);
        $this->db->from('roomtypes');
        $query1 = $this->db->get();
        if ($query1->num_rows() > 0) {
            return $query1->result();    // return a array of object
        } else {
            return NULL;
        }
    }

    function getData($listing_id)
    {
        $this->db->select('room_type_id AS room, check_in AS start_date,check_out AS end_date,booking.booking_id AS text,booking.booking_id AS id,status_cal AS status,is_paid_cal AS is_paid');
        $this->db->where('listing_id', $listing_id);
        $this->db->from('booking');
        $this->db->join('itemdetails', 'booking.booking_id = itemdetails.booking_id');
        $query1 = $this->db->get();
        if ($query1->num_rows() > 0) {
            return $query1->result();    // return a array of object
        } else {
            return NULL;
        }
    }

    function getRoomStatus(){
        $this->db-> from('roomstatus');
        $query1 = $this->db->get();
        if ($query1-> num_rows() > 0){
            return $query1->result();    // return a array of object
        }
        else{
            return NULL;
        }
    }

    function getBookingStatus(){
        $this->db-> from('bookingstatus');
        $query1 = $this->db->get();
        if ($query1-> num_rows() > 0){
            return $query1->result();    // return a array of object
        }
        else{
            return NULL;
        }
    }
}
