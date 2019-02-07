<?php
class AdminModel extends CI_Model
{
	function getHotelDetails()
    {
        $this->db->select('listing_id, listing_name, destination_id,email,main_contact,mobile');
        $this->db->where('verification', 'verified');
        $this->db->from('listings');
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






}
