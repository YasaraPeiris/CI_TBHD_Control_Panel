<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {

	public function login(){
		if (empty($_POST['username']) || empty($_POST['password'])) {
			$error = "Username or Password is invalid";
		} else {
			$count = 0;
// Define $username and $password
			$username = $_POST['username'];
			$password = $_POST['password'];
			$username = stripslashes($username);
			$password = stripslashes($password);
			$user =  $this->LoginModel->authenticate($username,$password);
			$user = array_filter($errors);
			if (!empty($user)) {
				$_SESSION['username'] = $username;
				$_SESSION['password'] = $password;
				$usertype=$user->usertype;
				$_SESSION['usertype'] = $usertype;
				if($usertype=="hotelAdmin"){
				$_SESSION['hotelno'] = $user->hotel_No;
				$this->load->view('adminHome');
			}
			else{
				$_SESSION['hotelno'] = 0;
				$this->load->view('hotelHome');
			}
			

		} else {
				$error = "Username or Password is invalid";
            //header("location: ../index.php");
			}
			
		}
	}
	


}