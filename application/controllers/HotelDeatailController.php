<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HotelDeatailController extends CI_Controller {

	public function index(){
		$this->load->library('session');
		if (isset($_SESSION['hotelno'])) {
			$this->load->model('AdminModel');
			// $listing_no = $_SESSION['hotelno'];
			$listing =  $this->AdminModel->getVerifiedHotelDetails();
			$data= array('hotels'=> $listing );
			$this->load->view('admin/hotelListButtons',$data);
		}
		else{
			$_SESSION['error']= 'Time is up, please log in again for your own security.';
			redirect();
		}
	}

	
}