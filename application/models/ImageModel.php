<?php
class ImageModel extends CI_Model
{
	function addmainimage($results){
		$this->db->insert("listingpics", $results);  
	}
	function addroomimage($results){
		$this->db->insert("roompics", $results);  
	}

}
?>