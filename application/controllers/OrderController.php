<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OrderController extends CI_Controller {

	public function hotelDetails(){
		
		$this->load->library('session');
		$listing_no = $_SESSION['hotelno'];
		$this->load->model('ListingsModel');
		$listing =  $this->ListingsModel->getListingDetails($listing_no);
		$data= array('data1'=> $listing[0]->main_facilities );
		$this->load->view('hotel/hotelDetails',$data);

	}

}