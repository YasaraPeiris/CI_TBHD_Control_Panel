<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {
	
	public function login(){
		$this->load->library('session');
		$errors = 'Sign into start your session';
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		if ($username==null || $password==null) {
			$errors = "Don't keep any of the spaces blank.";
			echo $errors;
			redirect();
			// $this->load->view('index');
		} else {
			$this->load->model('LoginModel');
			$count = 0;
// Define $username and $password
			$username = stripslashes($username);
			$password = stripslashes($password);
			$user =  $this->LoginModel->authenticate($username,$password);
			if(!empty($user)){
				$_SESSION['username'] = $username;
				$_SESSION['password'] = $password;
				$usertype = $user[0]->usertype;
				$_SESSION['usertype'] = $usertype;

				if($usertype=="hotel_owner"){
					$listing_no = $user[0]->listing_id;
					$_SESSION['hotelno'] = $listing_no;
					$this->load->model('ListingsModel');
					$listing =  $this->ListingsModel->getListingDetails($listing_no);
					$_SESSION['login_hotel'] = $listing[0]->listing_name;
					$orders= $this->newOrders($listing_no);
					$checkins = $this->recent_checkins($listing_no);
					$data= array('data1'=> $listing[0],'data2'=>$orders,'data3'=>$checkins);
                    $_SESSION['login_user'] =  "hotel";
					$this->load->view('hotel/hotelsHome',$data);
				}
				else{
					$_SESSION['hotelno'] = 0;
                    $_SESSION['login_user'] =  "admin";
					$this->load->view('admin/adminHome');
				}	
			}
			else {
                $errors = "Your username or password is incorrect";
                echo $errors;
                redirect();
                // $this->load->view('index');
            }
		}
	}
	
	public function newOrders($listing_no){
		$this->load->model('CheckOrderModel');
		$orders =  $this->CheckOrderModel->getRecentOrders($listing_no);
		$booking_id=0;
		$result = array();
		$element = array();
		$j=0;
		$i=0;
		$k=0;
		if(sizeof($orders)>0){
		foreach ($orders as $row) {
			$k++;
			if($booking_id==$row['booking_id']){
				$same = true;
			}else{
				$same = false;
				$booking_id = $row['booking_id'];
			}
			if($same==false){
				if($element!=null){
					
					$result[$j] = $element;
					$j++;
				}
				$element = array();
				$i=0;
				$element[$i]=$row;	
			}
			else{
				$element[$i]=$row;
			}
			$i++;
			if($k=sizeof($orders)){
				$result[$j] = $element;
			}
		}
	}
		return $result;
	}

	public function orderHistory($listing_no){

		$this->load->model('CheckOrderModel');
		$orders =  $this->CheckOrderModel->getOrderHistory($listing_no);
		$booking_id=0;
		$result = array();
		$element = array();
		$j=0;
		$i=0;
		$k=0;
		if(sizeof($orders)>0){
		foreach ($orders as $row) {
			$k++;
			if($booking_id==$row['booking_id']){
				$same = true;
			}else{
				$same = false;
				$booking_id = $row['booking_id'];
			}
			if($same==false){
				if($element!=null){
					
					$result[$j] = $element;
					$j++;
				}
				$element = array();
				$i=0;
				$element[$i]=$row;	
			}
			else{
				$element[$i]=$row;
			}
			$i++;
			if($k=sizeof($orders)){
				$result[$j] = $element;
			}

		}
	}
		return $result;
	}
	public function viewHomePage(){
		$this->load->library('session');

		if($_SESSION['usertype'] == "hotel_owner"){
			$this->load->model('ListingsModel');
			$listing_no = $_SESSION['hotelno'];
			$listing =  $this->ListingsModel->getListingDetails($listing_no);
			$orders= $this->newOrders($listing_no);
			$checkins = $this->recent_checkins($listing_no);
			$data= array('data1'=> $listing[0],'data2'=>$orders,'data3'=>$checkins);
			$this->load->view('hotel/hotelsHome',$data);
		}
		else{
			$this->load->view('adminHome');
		}

	}
	public function recent_checkins($listing_no){
		$this->load->model('CheckOrderModel');
		$orders =  $this->CheckOrderModel->getRecentCheckins($listing_no);

		$booking_id=0;
		$result = array();
		$element = array();
		$j=0;
		$i=0;
		$k=0;
		if(sizeof($orders)>0){
		foreach ($orders as $row) {
			$k++;
			if($booking_id==$row['booking_id']){
				$same = true;
			}else{
				$same = false;
				$booking_id = $row['booking_id'];
			}
			if($same==false){
				if($element!=null){
					
					$result[$j] = $element;
					$j++;
				}
				$element = array();
				$i=0;
				$element[$i]=$row;	
			}
			else{
				$element[$i]=$row;
			}
			$i++;
			if($k=sizeof($orders)){
				$result[$j] = $element;
			}

		}
	}
		return $result;
	}

	public function viewOrderDetails(){
		$this->load->library('session');
		if(isset($_SESSION)){
			$listing_no = $_SESSION['hotelno'];
			$orders= $this->orderHistory($listing_no);
		}
		
		$data2= array('data2'=>$orders);
		$this->load->view('hotel/orderList',$data2);
	}


}