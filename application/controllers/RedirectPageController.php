<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RedirectPageController extends CI_Controller {

	public function viewHomePage(){
		$this->load->library('session');

		if($_SESSION['usertype'] == "hotelAdmin"){
			echo "dfd";
			$this->load->model('ListingsModel');
			$listing =  $this->ListingsModel->getListingDetails($listing_no);
			$data= array('data1'=> $listing[0] );
			$this->load->view('hotelsHome',$data);

		}
		else{
			$this->load->view('adminHome');
		}

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