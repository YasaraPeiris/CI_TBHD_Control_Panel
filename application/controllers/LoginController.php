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
			$this->load->view('index');
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

				if($usertype=="hotelAdmin"){
					$listing_no = $user[0]->listing_no;
					$_SESSION['hotelno'] = $listing_no;
					$this->load->model('ListingsModel');
					$listing =  $this->ListingsModel->getListingDetails($listing_no);
					$_SESSION['login_hotel'] = $listing[0]->listing_name;
					$data= array('data1'=> $listing[0] );
					$this->load->view('hotel/hotelsHome',$data);
				}
				else{
					$_SESSION['hotelno'] = 0;
					$this->load->view('admin/adminHome');
				}	
			}
			else{
				$errors = "Your username or password is incorrect";
				echo $errors;
				$this->load->view('index');
			}
			
		}
	}

	
	


}