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
			$this->load->view('../../Welcome/ViewIndex');
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
					$_SESSION['hotelno'] = $user[0]->hotel_No;
					echo "hellohotel";
					$this->load->view('hotel/hotelsHome');
				}
				else{
					$_SESSION['hotelno'] = 0;
					echo "helloadmin";
					$this->load->view('admin/adminHome');
				}	
			}
			else{
				$errors = "Your username or password is incorrect";
				$this->load->view('../../');
			}
			
		}
	}
	


}