<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AccountController extends CI_Controller {
	
	public function editMyAccount(){	
		$this->load->library('session');
		if (isset($_SESSION['hotelno']) && isset($_SESSION['login_hotel'])) {

			$this->load->helper('form');
			$this->load->helper('url');
			$data1=array();
			$data2=array();
		
			$this->load->model('AccountModel');
			
			if(isset($_POST['firstname'])){
				$this->load->library('session');
				if(isset($_SESSION)){
					$listing_no = $_SESSION['hotelno'];
				}
				else{
					redirect();
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
				// $this->AccountModel->logPersonalDetails($owner_id);
				$this->AccountModel->editAccountDetails($data2,$login_id);
				$this->AccountModel->editPersonalDetails($data1,$owner_id);
				$listing =  $this->AccountModel->getAccountDetails($listing_no);
				$data= array('data1'=> $listing[0] );
			}else{
				if(isset($_SESSION)){
					$listing_no = $_SESSION['hotelno'];
				}
				else{
					redirect();
				}
				$listing =  $this->AccountModel->getAccountDetails($listing_no);
				$data= array('data1'=> $listing[0] );
			}
			$this->load->view('hotel/myAccount',$data);
		}
		else{
			$_SESSION['error']= 'Time is up, please log in again for your own security.';
			redirect();
		}
		
	}

	
	


}