<?php
class AdminModel extends CI_Model
{
    function getHotelDetails()
    {
        $this->db->select('listing_id, listing_name, destination_id,email,main_contact,mobile,verification');
        // $this->db->where('verification', 'verified');
        $this->db->from('listings');
        $query1 = $this->db->get();
        if ($query1->num_rows() > 0) {
            return $query1->result();    // return a array of object
        } else {
            return NULL;
        }
        
    }
    function getSpecificHotelDetails($listing_id)
    {
        $this->db->select('listing_name');  //, email,main_contact,mobile
        $this->db->where('listing_id', $listing_id);
        $this->db->from('listings');
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
    function addManualBooking($data)
    {
        $this->db-> insert('manualbookings',$data);
        return $this->db->insert_id();
        
    }
    function addManualBookingItem($data)
    {
        $this->db-> insert('manualbookingitems',$data);
        
    }
    function changeHotelStatus($id,$status)
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
