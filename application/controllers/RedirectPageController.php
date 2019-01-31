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
		$this->load->library('session');
		if (isset($_SESSION['hotelno'])) {
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
		else{
			$_SESSION['error']= 'Time is up, please log in again for your own security.';
			redirect();
		}
    	
    }
	public function invoiceContent($booking, $items,$paid)
    {
		$this->load->library('session');
		if (isset($_SESSION['hotelno'])) {
			$pamount = $booking->promo_amount/100;
			// echo $booking->promo_amount/100;
		    $listing = (object)array('listing_name' => $booking->hotel_name,'listing_type' => 'hotel','commision'=> $booking->service_fee);
		    $check_incustom = $booking->checkin;
		    $check_outcustom = $booking->checkout;
		    $customer = (object)array('customer_name' => $booking->cname, 'email' => $booking->cemail  , 'country' => 'Sri Lanka','nic_number' => $booking->cnic ,'phone' => $booking->cmobile);
		    
		    $booking= (object)array( 'check_in' => $check_incustom ,'check_out' => $check_outcustom ,'paid_amount' =>  $paid ,'total_rate' => $booking->total);
		    $booked_rooms = array();
		    for ($i=0; $i < sizeof($items) ; $i++) {
		    	$booked_rooms[] = (object)array( 'item_name' => $items[$i]->room_name ,'rate' => $items[$i]->room_rate, 'quantity' => $items[$i]->qty ,'item_type' => $items[$i]->price_type);
		    }
		    $dStart = new DateTime($check_incustom);
		    $dEnd  = new DateTime($check_outcustom);
		    $dDiff = $dStart->diff($dEnd);
		    $promotions= (object)array('promo_amount' => $pamount );
		    $data= array('customer'=> $customer , 'booking'=>$booking ,'booked_rooms'=>$booked_rooms,'days'=>$dDiff->days,'listing'=>$listing,'promotions'=>$promotions);
		    // print_r($data);
		    $this->load->view('admin/bootstrapinvoice.php', $data);	
	    }
		else{
			$_SESSION['error']= 'Time is up, please log in again for your own security.';
			redirect();
		}
    	
    }
	public function saveContent()
    {
		$this->load->library('session');
		if (isset($_SESSION['hotelno'])) {
	    	if (isset($_POST['hotelname'])) {
				$this->load->model('AdminModel');
				// echo "<br> -- <br>";
				$main_arry = array('hotel_name'=>$_POST['hotelname'],'cname'=>$_POST['name'],'cemail'=>$_POST['email'],'cnic'=>$_POST['nic'],'cmobile'=>$_POST['contact'],'checkin'=>$_POST['checkin'],'checkout'=>$_POST['checkout'],'service_fee'=>$_POST['servicefee'],'commission'=>$_POST['commission'],	'promo_amount'=>$_POST['promo'],'paid'=>$_POST['paid'],'payonly'=>$_POST['payonly'],'total'=>$_POST['total'],'admin_id'=>$_SESSION['hotelno'],'note'=>$_POST['extranote']);
				$mb_id =  $this->AdminModel->addManualBooking($main_arry);
				// echo "<br> -*".$mb_id."*- <br>";
				// print_r($main_arry);
				for ($rid=1; $rid <= $_POST['roomValueCount']; $rid++) { 
					$room_arry = array('mb_id'=>$mb_id,'item_id'=>$rid-1,'room_name'=>$_POST['item_name'.$rid],'room_rate'=>$_POST['rate'.$rid],'qty'=>$_POST['quantity'.$rid],'price_type'=>$_POST['item_type'.$rid]);
					// echo "<br> +++  <br>";
					// print_r($room_arry);
					$this->AdminModel->addManualBookingItem($room_arry);
				}
	    	}		
			$this->bookingDetails();
 		}
		else{
			$_SESSION['error']= 'Time is up, please log in again for your own security.';
			redirect();
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
	public function contentGenerator(){
		$this->load->view('admin/contentGenerator');

	}
	public function hotelList(){
		$this->load->model('AdminModel');
		$listing =  $this->AdminModel->getHotelDetails();
		$destination =  $this->AdminModel->getDestDetails();
		$data =array('listing'=> $listing,'destination'=>$destination);
		$this->load->view('admin/hotelList', $data);

	}
	public function destinationMapList(){
		$this->load->model('AdminModel');
		$destinationMap =  $this->AdminModel->getDestMapDetails();
		$data =array('destination'=> $destinationMap);
		$this->load->view('admin/destinationMap', $data);

	}
	public function bookingDetails(){
		$this->load->model('AdminModel');
		$manualbkngs =  $this->AdminModel->getBookingDetails();
		$data =array('manualbkngs'=> $manualbkngs);
		$this->load->view('admin/bookingDetails', $data);

	}
	public function generateContent(){
		$this->load->library('session');
		if (isset($_SESSION['hotelno'])) {
	    	if (isset($_POST['mbID']) || isset($_SESSION['mbID'])) {
	    		$mbID = 1;
	    		if (isset($_POST['mbID'])) {
	    			$_SESSION['mbID'] = $_POST['mbID'];
	    			$mbID = $_POST['mbID'];
	    		}
	    		elseif (isset($_SESSION['mbID'])) {
	    			$mbID = $_SESSION['mbID'];
	    		}
	    		$this->load->model('AdminModel');
	    		$manualbkngs =  $this->AdminModel->getSpcfcBookingDetails($mbID)[0];
	    		$manualbkngItem =  $this->AdminModel->getSpcfcBookingItms($mbID);
	    		$data =array('booking'=> $manualbkngs,'items'=>$manualbkngItem);
	    		// print_r($data);
				$this->load->view('admin/bookingContent',$data);
	    	}	
	    	else $this->bookingDetails();
 		}
		else{
			$_SESSION['error']= 'Time is up, please log in again for your own security.';
			redirect();
		}    
	}
	public function generateAllContent(){
		$this->load->library('session');
		if (isset($_SESSION['hotelno'])) {
	    	if (isset($_POST['tentativeSubmit']) && isset($_SESSION['mbID'])) {
	    		$mbID =  $_SESSION['mbID'];
	    		$this->load->model('AdminModel');
	    		$manualbkngs =  $this->AdminModel->getSpcfcBookingDetails($mbID)[0];
	    		$manualbkngItem =  $this->AdminModel->getSpcfcBookingItms($mbID);
	    		$Content = $this-> tentativeEmails($manualbkngs,$manualbkngItem);
	    		$data = array('Content'=>$Content);
	    		// print_r($tentContent);
				$this->load->view('admin/emailContent',$data);
	    	}
	    	elseif (isset($_POST['newBooking']) && isset($_POST['paid']) && isset($_SESSION['mbID'])) {
	    		$mbID =  $_SESSION['mbID'];
	    		$this->load->model('AdminModel');
	    		$manualbkngs =  $this->AdminModel->getSpcfcBookingDetails($mbID)[0];
	    		$manualbkngItem =  $this->AdminModel->getSpcfcBookingItms($mbID);
				if (isset($_POST['updatedemail']) && isset($_POST['updatednic'])) {
					$manualbkngs->cemail = $_POST['updatedemail'];
					$manualbkngs->cnic = $_POST['updatednic'];
				}
	    		$Content = $this-> newBookingEmails($manualbkngs,$manualbkngItem,$_POST['paid']);
	    		$data = array('Content'=>$Content);
	    		// print_r($tentContent);
				$this->load->view('admin/emailContent',$data);
	    	}
	    	elseif (isset($_POST['invoiceGen']) && isset($_POST['paid']) && isset($_SESSION['mbID'])) {
	    		$mbID =  $_SESSION['mbID'];
	    		$this->load->model('AdminModel');
	    		$manualbkngs =  $this->AdminModel->getSpcfcBookingDetails($mbID)[0];
	    		$manualbkngItem =  $this->AdminModel->getSpcfcBookingItms($mbID);
				if (isset($_POST['updatedemail']) && isset($_POST['updatednic'])) {
					$manualbkngs->cemail = $_POST['updatedemail'];
					$manualbkngs->cnic = $_POST['updatednic'];
				}
				$this->invoiceContent($manualbkngs,$manualbkngItem,$_POST['paid']);
	    	}	
	    	else $this->bookingDetails();
 		}
		else{
			$_SESSION['error']= 'Time is up, please log in again for your own security.';
			redirect();
		}    
	}
	public function destinationMapAdd(){
		$this->load->library('session');
		if (isset($_POST['listing_id']) && isset($_POST['destination_id'])) {
			    $listing_id = $_POST['listing_id'];
			    $destination_id = $_POST['destination_id'];
				$this->load->model('AdminModel');
				$destdata = array('listing_id'=>$listing_id, 'destination_id'=>$destination_id);
				$this->AdminModel->place_destMap($destdata);
				$_SESSION['alertDestMap'] = "Destination Map Added to listing ".$listing_id." to destination ".$destination_id;
		}
	    
		$this->destinationMapList();
	}
	public function adminHome(){
		$this->load->model('AdminModel');
		$logins =  $this->AdminModel->getLogin();
		$data =array('logins'=> $logins);
		// print_r($logins);
		$this->load->view('admin/adminHome',$data);

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
    public function tentativeEmails($booking,$items){
    	$roomText = "";
    	$datetime = new DateTime('tomorrow');
    	$date1obj = DateTime::createFromFormat('Y-m-d', $booking->checkin);
    	$date2obj = DateTime::createFromFormat('Y-m-d', $booking->checkout);
    	for ($rid=0; $rid < sizeof($items); $rid++) { 
    		$roomText .= $items[$rid]->qty." ".$items[$rid]->room_name." room(s) with price category ".$items[$rid]->price_type." (listed price LKR. ".$items[$rid]->room_rate." per room per day)<br>";
    	}

        $Cusheading = "inna.lk :: Details of the ".$booking->hotel_name;
        $Hotlheading = "inna.lk :: New Tentative Booking from ".$booking->checkin." to ".$booking->checkout;
        $Cuscontent = "Dear ".$booking->cname.",<br><br>

        Details of the ".$booking->hotel_name." are mentioned herewith as you requested.<br><br>

        Hotel Name: ".$booking->hotel_name."<br>
		Check-in date   : ".date_format($date1obj, 'd F, Y')." <br>
		Check-out date : ".date_format($date2obj, 'd F, Y')."<br><br>
		Rooms : ".$roomText."<br>";
		if ($booking->promo_amount > 0) {
			$Cuscontent .= "Sub Total         : LKR ".$booking->total/(1-$booking->promo_amount/100)."<br>
			Discount  : LKR ".($booking->total/(1-$booking->promo_amount/100)-$booking->total)."<br>";
		}
		$Cuscontent .= "Total                 : LKR ".$booking->total."<br><br>

		You Only have to pay ".$booking->payonly."% (LKR ".($booking->total*$booking->payonly/100).") to reserve now. <br><br>

		Here are our bank details.<br><br>

		Sampath Bank - Maharagama Super Branch<br> 
		THE BEST HOTEL DEAL<br>
		109214006797<br><br>

		BOC Bank - Wijerama Branch<br>
		THE BEST HOTEL DEAL <br>
		82456678<br><br>

		Thank you very much.<br><br>

		Best Regards,";

		$Hotlcontent = "Dear all,<br><br>

        You have a new booking and here are the full details of the booking:<br><br>

        This is a <b>tentative booking valid till ". $datetime->format('d F, Y')."</b> and will get confirmed once the customer deposited the advance money.<br><br>

        Hotel Name: ".$booking->hotel_name."<br>
		Check-in date   : ".date_format($date1obj, 'd F, Y')." <br>
		Check-out date : ".date_format($date2obj, 'd F, Y')."<br><br>
		Rooms : ".$roomText."<br>
		Customer Name: ".$booking->cname."<br><br>

		Please reserve the rooms.<br><br>

		Thank you very much.<br><br>

		Best Regards,";
		return array(0 => $Cusheading, 1 => $Hotlheading,2 => $Cuscontent, 3 => $Hotlcontent);
    }
    public function newBookingEmails($booking,$items,$paid){
    	$totalbeforSF = $booking->total/(1+$booking->service_fee/100) ;
    	$totalHotel = $totalbeforSF*(1-$booking->commission/100);
    	$roomText = "";
    	$date1obj = DateTime::createFromFormat('Y-m-d', $booking->checkin);
    	$date2obj = DateTime::createFromFormat('Y-m-d', $booking->checkout);
    	for ($rid=0; $rid < sizeof($items); $rid++) { 
    		$roomText .= $items[$rid]->qty." ".$items[$rid]->room_name." room(s) with price category ".$items[$rid]->price_type." (listed price LKR. ".$items[$rid]->room_rate." per room per day)<br>";
    	}

        $Cusheading = "inna.lk :: Your booking at ".$booking->hotel_name." is now confirmed.";
        $Hotlheading = "inna.lk :: New Booking from ".$booking->checkin." to ".$booking->checkout;
        $Cuscontent = "Dear ".$booking->cname.",<br><br>
        Your booking at ".$booking->hotel_name." is now confirmed and here are the full details of the booking:<br><br>
        Booking id : N/A (offline booking)<br>
        Hotel Name: ".$booking->hotel_name."<br>
		Check-in date   : ".date_format($date1obj, 'd F, Y')." <br>
		Check-out date : ".date_format($date2obj, 'd F, Y')."<br><br>
		Rooms : ".$roomText."<br>

		Customer Name       : ".$booking->cname." <br> 
		Customer Telephone: ".$booking->cmobile."<br>
		Customer E-mail     : ".$booking->cemail."<br>
		Customer NIC          : ".$booking->cnic." <br><br>";
		if ($booking->promo_amount > 0) {
			$Cuscontent .= "Sub Total         : LKR ".number_format((float)$booking->total/(1-$booking->promo_amount/100),2, '.', '')."<br>
			Discount  : LKR ".number_format((float)($booking->total/(1-$booking->promo_amount/100)-$booking->total),2, '.', '')."<br>";
		}
		$Cuscontent .= "Total                 : LKR ".number_format((float)$booking->total,2, '.', '')."<br><br>

		Amount charged by inna.lk                                : LKR ".number_format((float)$paid,2, '.', '')."<br>
		<b>Amout that should be collected at the hotel: LKR ".number_format((float)($booking->total - $paid), 2, '.', '')."</b><br><br>

		The invoice is attached herewith.<br><br>

		Enjoy your stay.<br><br>

		Best Regards,";

		$Hotlcontent = "Dear all,<br><br>

        You have a new booking and here are the full details of the booking:<br><br>
        Booking id : N/A (offline booking)<br>
        Hotel Name: ".$booking->hotel_name."<br>
		Check-in date   : ".date_format($date1obj, 'd F, Y')." <br>
		Check-out date : ".date_format($date2obj, 'd F, Y')."<br><br>

		Rooms : ".$roomText."<br>

		Customer Name       : ".$booking->cname." <br> 
		Customer Telephone: ".$booking->cmobile."<br>
		Customer E-mail     : ".$booking->cemail."<br>
		Customer NIC          : ".$booking->cnic." <br><br>";

		if ($booking->promo_amount > 0) {
			$Hotlcontent .= "With a promotion price of ".$booking->promo_amount." percent. <br>";
		}
		$Hotlcontent .= "Total for hotel: LKR. ".number_format((float)$totalHotel,2, '.', '')."<br>
		Total for inna.lk: LKR. ".number_format((float)($booking->total - $totalHotel),2, '.', '')." (commission plus service fee)<br>
		Total charge from Customer: ".number_format((float)$booking->total,2, '.', '')."<br><br>

		Amount charged by inna.lk                                : LKR ".number_format((float)$paid,2, '.', '')."<br>
		<b>Amout that should be collected at the hotel: LKR ".number_format((float)($booking->total - $paid),2, '.', '')."</b><br><br>

		Please reserve the rooms.<br><br>

		Thank you very much.<br><br>

		Best Regards,";
		return array(0 => $Cusheading, 1 => $Hotlheading,2 => $Cuscontent, 3 => $Hotlcontent);
    }
}