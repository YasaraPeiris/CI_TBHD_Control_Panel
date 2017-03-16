<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EditDetailsController extends CI_Controller {

	public function hotelDetails(){
		$this->load->library('session');
		$listing_no = $_SESSION['hotelno'];
		$this->load->model('ListingsModel');
		$listing =  $this->ListingsModel->getListingDetails($listing_no);
		$data= array('data1'=> $listing[0]->main_facilities );
		$this->load->view('hotel/hotelDetails',$data);

	}

	public function hotelPics(){
		$this->load->library('session');
		$listing_no = $_SESSION['hotelno'];
		$this->load->model('ListingsModel');
		$listing_pics =  $this->ListingsModel->getListingPics($listing_no);
		$data= array('data'=> $listing_pics );
		$this->load->view('hotel/hotelDetails',$data);
	}

	public function roomRates(){
		$this->load->library('session');
		$listing_no = $_SESSION['hotelno'];
		$this->load->model('RoomModel');
		$rooms =  $this->RoomModel->getRoomDetails($listing_no);
		$data= array('data1'=> $rooms );
		$this->load->view('hotel/updateRoomPrices',$data);

	}

	public function roomPics(){
		$this->load->library('session');
		$listing_no = $_SESSION['hotelno'];
		$this->load->model('ListingsModel');
		$listing_pics =  $this->ListingsModel->getListingPics($listing_no);
		$data= array('data'=> $listing_pics );
		$this->load->view('hotel/hotelDetails',$data);
	}

	public function viewMyAccount(){
		$this->load->library('session');
		$this->load->view('myAccount');
	}
	
	public function viewEditDetails(){
		$this->load->library('session');
		$this->load->view('hotel/editDetails');
	}

	
	


}