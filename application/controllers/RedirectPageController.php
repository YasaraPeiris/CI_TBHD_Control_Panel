<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RedirectPageController extends CI_Controller {

	public function viewMyAccount(){
		$this->load->library('session');
		if (isset($_SESSION['hotelno']) && isset($_SESSION['login_hotel'])) {
			$this->load->model('AccountModel');
			$listing_no = $_SESSION['hotelno'];
			$listing =  $this->AccountModel->getAccountDetails($listing_no);
			$data= array('data1'=> $listing[0] );
			$this->load->view('hotel/myAccount',$data);
		}
		else{
			$_SESSION['error']= 'Time is up, please log in again for your own security.';
			redirect();
		}
	}
	
	public function viewEditDetails(){
		$this->load->library('session');
		$this->load->view('hotel/editDetails');
	}

	public function viewCheckOrders(){
        $this->load->library('session');
        $this->load->view('admin/checkOrders');
    }

    public function viewCheckInquiries(){
        $this->load->library('session');
        $this->load->view('admin/checkInquiries');
    }

    public function viewCheckNotifications(){
        $this->load->library('session');
        $this->load->view('admin/checkNotifications');
    }

	

	
	


}