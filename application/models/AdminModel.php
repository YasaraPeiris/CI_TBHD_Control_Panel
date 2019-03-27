<?php
class AdminModel extends CI_Model
{
    function getHotelDetails()
    {
        $this->db->select('listing_id, listing_name, destination_id, email, main_contact, mobile, verification');
        // $this->db->where('verification', 'verified');
        $this->db->from('listings');
        $query1 = $this->db->get();
        if ($query1->num_rows() > 0) {
            return $query1->result();    // return a array of object
        } else {
            return NULL;
        }
        
    }
    function getVerifiedHotelDetails()
    {
        $this->db->select('listing_id, listing_name, destination_id,display_loc');
        $this->db->order_by("listing_name", "asc");
        $this->db->where('verification', 'verified');
        $this->db->from('listings');
        $query1 = $this->db->get();
        if ($query1->num_rows() > 0) {
            return $query1->result();    // return a array of object
        } else {
            return NULL;
        }
        
    }
    function piceSetData($price_id)
    {
        $this->db->where('id', $price_id);
        $this->db->from('roomprices');
        $query1 = $this->db->get();
        if ($query1->num_rows() > 0) {
            return $query1->result();    // return a array of object
        } else {
            return NULL;
        }
        
    }
    function getSpecificListingDetails($listing_id)
    {
        $this->db->select('listing_id, listing_name, latitude, longitude, address_line_1, address_line_2,email, main_contact, mobile, destination_id');  
        $this->db->where('listing_id', $listing_id);
        $this->db->from('listings');
        $query1 = $this->db->get();
        if ($query1->num_rows() > 0) {
            return $query1->result();    // return a array of object
        } else {
            return NULL;
        }
        
    }
    function getAllSpecificListingDetails($listing_id)
    {
        $this->db->where('listing_id', $listing_id);
        $this->db->from('listings');
        $query1 = $this->db->get();
        if ($query1->num_rows() > 0) {
            return $query1->result();    // return a array of object
        } else {
            return NULL;
        }
        
    }
    function get_owner($owner_id)
    {
        $this->db->where('owner_id',$owner_id);
        $this->db-> from('owner');
        $query1 = $this->db->get();
        if ($query1-> num_rows() > 0){
            return $query1->result();    // return a array of object
        }   
        else{
            return NULL;    
        }
    }
    function get_bookings($listing_id,$checkin,$checkout)
    {
        // date_default_timezone_set('Asia/Colombo');
        // $nowdate = date("Y-m-d H:i:s");
        // echo $nowdate;
        $this->db->where('listing_id',$listing_id);
        $this->db->where('check_out>',$checkin);
        $this->db->where('check_in<',$checkout);
        // $this->db->group_start()->where('status','confirm')->or_where("('status'='in_progree' AND 'order_created_date<'='$nowdate')", NULL, FALSE)->group_end();
        // $this->db->or_where('status','confirm');
        $this->db-> from('booking');
        $query1 = $this->db->get();
        if ($query1-> num_rows() > 0){
            return $query1->result();    // return a array of object
        }   
        else{
            return NULL;    
        }
    }   
    function get_hotel($listing_id)
    {
        $this->db->where('listing_id',$listing_id);
        $this->db-> from('hotel');
        $query1 = $this->db->get();
        if ($query1-> num_rows() > 0){
            return $query1->result();    // return a array of object
        }   
        else{
            return NULL;    
        }
    }
    function get_promotions( $listing_id, $checkin, $checkout  )
    {
        $this->db->where('listing_id', $listing_id);
        $this->db->where('start_date <=',date('Y-m-d', strtotime($checkin)));
        $this->db->where('end_date >=',date('Y-m-d', strtotime($checkout)));

        $this->db-> from('promotions');
        $query1 = $this->db->get();
        if ($query1-> num_rows() > 0){
            return $query1->result();    // return a array of object
        }
        else{
            return NULL;
        }
    }
    function get_roomtypes($listing_id)
    {
        $this->db->where('listing_id', $listing_id);
        $this->db->from('roomtypes');
        $this->db->order_by('room_type_id','asc');
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
    function getbestprice($pricecategory_id,$date1,$date2)
    {
        $this->db->where('pricecategory_id', $pricecategory_id);
        $this->db->where('valid_till >=', $date1);
        $this->db->where('valid_from <', $date2);
        $this->db->from('roomprices');
        $this->db->order_by('priority','asc');
        $query1 = $this->db->get();
        if ($query1-> num_rows() > 0){
            return $query1->result();    // return a array of object
        }   
        else{
            return NULL;    
        }
    }
    function getPriceCategories()
    {
        $this->db->from('roompricecategory');
        $this->db->join('listings','roompricecategory.listing_id=listings.listing_id');        
        $this->db->where('listings.verification', 'verified');
        $this->db->select('listings.listing_id, listings.listing_name, pricecategory_id, room_type_id, price_id, price_name,price_occ');  
        $query1 = $this->db->get();
        if ($query1->num_rows() > 0) {
            return $query1->result();    // return a array of object
        } else {
            return NULL;
        }
        
    }
    function getPrices()
    {
        $this->db->from('roomprices');
        $query1 = $this->db->get();
        if ($query1->num_rows() > 0) {
            return $query1->result();    // return a array of object
        } else {
            return NULL;
        }
        
    }
    function get_booked_rooms($booking_id)
    {
        $this->db->where('booking_id',$booking_id);
        $this->db-> from('itemdetails');
        $query1 = $this->db->get();
        if ($query1-> num_rows() > 0){
            return $query1->result();    // return a array of object
        }   
        else{
            return NULL;    
        }
    }
    function getSpecificHotelDetails($listing_id)
    {
        $this->db->select('cancelation_policy');  
        $this->db->where('listing_id', $listing_id);
        $this->db->from('hotel');
        $query1 = $this->db->get();
        if ($query1->num_rows() > 0) {
            return $query1->result();    // return a array of object
        } else {
            return NULL;
        }
        
    }
    function getHotelList()
    {
        $this->db->select('listing_id, listing_name');
        $this->db->where('verification', 'verified');
        $this->db->order_by("listing_name", "asc");
        $this->db->from('listings');
        $query1 = $this->db->get();
        if ($query1->num_rows() > 0) {
            return $query1->result();    // return a array of object
        } else {
            return NULL;
        }
        
    }
    function getDestination($destName)
    {
        $this->db->select('destination_id, show, main_dest');
        $this->db->where('destination_name', $destName);
        $this->db->from('destination');
        $query1 = $this->db->get();
        if ($query1->num_rows() > 0) {
            return $query1->result();    // return a array of object
        } else {
            return NULL;
        }
        
    }

    function getDestinationbyID($destID)
    {
        $this->db->select('destination_name, show, main_dest');
        $this->db->where('destination_id', $destID);
        $this->db->from('destination');
        $query1 = $this->db->get();
        if ($query1->num_rows() > 0) {
            return $query1->result();    // return a array of object
        } else {
            return NULL;
        }
        
    }
    function getAgentContact($admin_id)
    {
        $this->db->select('listing_name, mobile');
        $this->db->where('listing_id', $admin_id);
        $this->db->from('listings');
        $query1 = $this->db->get();
        if ($query1->num_rows() > 0) {
            return $query1->result();    // return a array of object
        } else {
            return NULL;
        }
        
    }
    function getDestMapDetails()
    {
        $this->db->from('destinationmap');
        $query1 = $this->db->get();
        if ($query1->num_rows() > 0) {
            return $query1->result();    // return a array of object
        } else {
            return NULL;
        }
        
    }
    function getLogin()
    {
        $this->db->where('usertype', 'hotel_owner');
        $this->db->from('login');
        $query1 = $this->db->get();
        if ($query1->num_rows() > 0) {
            return $query1->result();    // return a array of object
        } else {
            return NULL;
        }        
    }
    function getmbData($mbid)
    {
        $this->db->where('mb_id', $mbid);
        $this->db->from('manualbookings');
        $query1 = $this->db->get();
        if ($query1->num_rows() > 0) {
            return $query1->result();    // return a array of object
        } else {
            return NULL;
        }        
    }
    function getmbSubData($mbid)
    {
        $this->db->where('mb_id', $mbid);
        $this->db->from('manualbookingitems');
        $query1 = $this->db->get();
        if ($query1->num_rows() > 0) {
            return $query1->result();    // return a array of object
        } else {
            return NULL;
        }        
    }
    function getDestDetails()
    {
        $this->db->from('destination');
        $query1 = $this->db->get();
        if ($query1->num_rows() > 0) {
            return $query1->result();    // return a array of object
        } else {
            return NULL;
        }
        
    }
    function getBookingDetails()
    {
        $this->db->order_by("mb_id", "desc");
        $this->db->from('manualbookings');
        $this->db->join('listings','manualbookings.listing_id=listings.listing_id');        
        $this->db->select('manualbookings.mb_id, listings.listing_name, manualbookings.cname,manualbookings.cmobile,manualbookings.checkin , manualbookings.checkout,manualbookings.note,manualbookings.admin_id');
        $query1 = $this->db->get();
        if ($query1->num_rows() > 0) {
            return $query1->result();    // return a array of object
        } else {
            return NULL;
        }
        
    }
    function getBookingDetails_all()
    {
        $this->db->order_by("mb_id", "desc");
        $this->db->from('manualbookings');
        $query1 = $this->db->get();
        if ($query1->num_rows() > 0) {
            return $query1->result();    // return a array of object
        } else {
            return NULL;
        }
        
    }
    function getSpcfcBookingDetails($id)
    {
        $this->db->where('mb_id', $id);
        $this->db->from('manualbookings');
        $query1 = $this->db->get();
        if ($query1->num_rows() > 0) {
            return $query1->result();    // return a array of object
        } else {
            return NULL;
        }
        
    }
    function getSpcfcBookingItms($id)
    {
        $this->db->where('mb_id', $id);
        $this->db->from('manualbookingitems');
        $query1 = $this->db->get();
        if ($query1->num_rows() > 0) {
            return $query1->result();    // return a array of object
        } else {
            return NULL;
        }
        
    }
    function addDestination($data)
    {
        $this->db-> insert('destination',$data);
        return $this->db->insert_id();
    }
    function place_destMap($data)
    {
        $this->db-> insert('destinationmap',$data);
        
    }
    function delete_destMap($data)
    {
        $this->db-> delete('destinationmap',$data);
        return $this->db->affected_rows(); 
    }
    function delete_price($data)
    {
        $this->db-> delete('roomprices',$data);
        return $this->db->affected_rows(); 
    }
    function addManualBooking($data)
    {
        $this->db-> insert('manualbookings',$data);
        return $this->db->insert_id();
        
    }
    function addManualBookingItem($data)
    {
        $this->db-> insert('manualbookingitems',$data);
        
    }
    function changeHotelStatus($id,$status) // for status and ourInsight changes
    {
        $this->db->where('listing_id', $id);
        $this->db->update("listings", $status);
    }
    function showDestination($id,$data)
    {
        $this->db->where('destination_id', $id);
        $this->db->update("destination", $data);
    }
}
