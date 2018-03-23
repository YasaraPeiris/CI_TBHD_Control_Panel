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

	public function invoice()
    {
    	if (isset($_POST['hotelname'])) {
			// print_r($_POST);
		    $listing = (object)array('listing_name' => $_POST['hotelname'],'listing_type' => 'hotel','commision'=> $_POST['commission']);
		    $check_incustom = $_POST['checkin'];
		    $check_outcustom = $_POST['checkout'];
		    $customer = (object)array('customer_name' => $_POST['name'], 'email' => $_POST['email']  , 'country' => 'Sri Lanka','nic_number' => $_POST['nic'] ,'phone' => $_POST['contact']);
		    
		    $booking= (object)array( 'check_in' => $check_incustom ,'check_out' => $check_outcustom ,'paid_amount' =>  $_POST['paid'] ,'total_rate' => $_POST['total']);
		    $booked_rooms = array();
		    for ($i=1; $i <= $_POST['roomValueCount'] ; $i++) { 
		    	$val1 = 'item_name'.$i;
		    	$val2 = 'quantity'.$i;
		    	$val3 = 'rate'.$i;
		    	$val4 = 'item_type'.$i;
		    	$booked_rooms[] = (object)array( 'item_name' => $_POST[$val1] ,'rate' => $_POST[$val3], 'quantity' => $_POST[$val2] ,'item_type' => $_POST[$val4]);
		    }
		    // $booked_rooms = array( 
		        // '0' => (object)array( 'item_name' => 'Deluxe Triple Room' ,'rate' => 12950.00, 'quantity' => 1 ,'item_type' => 'Bed and Breakfast' ),
		        // '1' => (object)array( 'item_name' => 'Deluxe Family Room' ,'rate' => 16500.00, 'quantity' => 1 ,'item_type' => 'Bed and Breakfast' ) );
		    $promotions= (object)array('promo_amount' => $_POST['promo']);
		    $dStart = new DateTime($check_incustom);
		    $dEnd  = new DateTime($check_outcustom);
		    $dDiff = $dStart->diff($dEnd);
		    $data= array('customer'=> $customer , 'booking'=>$booking ,'booked_rooms'=>$booked_rooms,'days'=>$dDiff->days,'listing'=>$listing,'promotions'=>$promotions);
		    // print_r($data);
		    $this->load->view('admin/bootstrapinvoice.php', $data);	
    	}
    	else{		
			$this->load->view('admin/invoiceGenerator');
    	}
    	
    }
	
	public function viewEditDetails(){
		$this->load->library('session');
		if (isset($_SESSION['hotelno']) && isset($_SESSION['login_hotel'])) {
			$this->load->view('hotel/editDetails');
		}
		else{
			$_SESSION['error']= 'Time is up, please log in again for your own security.';
			redirect();
		}
	} 
	public function invoiceGenerator(){
		$this->load->view('admin/invoiceGenerator');

	}
	public function adminHome(){
		$this->load->view('admin/adminHome');

	}
	public function checkInquiries(){
		$this->load->view('admin/checkInquiries');

	}
	public function updateHotelDetails(){
		$this->load->view('admin/updateHotelDetails');

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