<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AccountController extends CI_Controller {
	
	public function editMyAccount(){
		$this->load->helper('form');
		$this->load->helper('url');
		$data1=array();
		$data2=array();
		
	if(isset($_POST['firstname'])){
			$this->load->model('AccountModel');
			$this->load->library('session');
			if(isset($_SESSION)){
				$listing_no = $_SESSION['hotelno'];
			}
			$data1 = array(  
				'first_name' =>$_POST['firstname'],  
				'last_name' => $_POST['lastname'],
				'email' =>$_POST['email'],
				'mobile' =>$_POST['tele']
				);
			$data2 = array(
				'username'=> $_POST['username'],
				'password' => $_POST['inputPassword'],
				);	

			$login_id = $_POST['login_id'];
			$owner_id = $_POST['owner_id'];
			$this->AccountModel->editAccountDetails($data2,$login_id);
			$this->AccountModel->editPersonalDetails($data1,$owner_id);
			$listing =  $this->AccountModel->getAccountDetails($listing_no);
			$data= array('data1'=> $listing[0] );
		}else{
		}
		$this->load->view('hotel/myAccount',$data);
		
		
	}

	
	


}