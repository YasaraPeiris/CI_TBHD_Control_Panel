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
	public function invoiceContent($booking, $items,$paid,$listingdetails)
    {
		$this->load->library('session');
		if (isset($_SESSION['hotelno'])) {
			$pamount = $booking->promo_amount/100;
			// echo $booking->promo_amount/100;
		    $listing = (object)array('listing_name' => $listingdetails->listing_name,'listing_type' => 'hotel','commision'=> $booking->service_fee);
		    $check_incustom = $booking->checkin;
		    $check_outcustom = $booking->checkout;
		    $customer = (object)array('customer_name' => $booking->cname, 'email' => $booking->cemail  , 'country' => 'Sri Lanka','nic_number' => $booking->cnic ,'phone' => $booking->cmobile);
		    
		    $booking= (object)array('mb_id'=> $booking->mb_id, 'check_in' => $check_incustom ,'check_out' => $check_outcustom ,'paid_amount' =>  $paid ,'total_rate' => $booking->total);
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
	    	if (isset($_POST['listingID'])) {
				$this->load->model('AdminModel');
				// echo "<br> -- <br>";
				$main_arry = array('mb_id'=>$_POST['cid'], 'listing_id'=>$_POST['listingID'],'cname'=>$_POST['name'],'cemail'=>$_POST['email'],'cnic'=>$_POST['nic'],'cmobile'=>$_POST['contact'],'checkin'=>$_POST['checkin'],'checkout'=>$_POST['checkout'],'checkintime'=>$_POST['checkinT'],'checkouttime'=>$_POST['checkoutT'],'service_fee'=>$_POST['servicefee'],'commission'=>$_POST['commission'],	'promo_amount'=>$_POST['promo'],'paid'=>0,'payonly'=>$_POST['payonly'],'total'=>$_POST['total'],'admin_id'=>$_SESSION['hotelno'],'note'=>$_POST['extranote']);
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
		$this->load->model('AdminModel');
		$hotelList =  $this->AdminModel->getHotelList();
		$this->load->view('admin/contentGenerator',array('hotelList'=>$hotelList));

	}
	public function copyContent(){
		$this->load->library('session');
		if (isset($_SESSION['hotelno'])) {
	    	if (isset($_POST['mbID'])) {
				$this->load->model('AdminModel');
				$mbdata =  $this->AdminModel->getmbData($_POST['mbID']);
				$mbsubdata =  $this->AdminModel->getmbSubData($_POST['mbID']);
				$hotelList =  $this->AdminModel->getHotelList();
				$data =array('mbdata'=> $mbdata[0],'mbsubdata'=>$mbsubdata,'hotelList'=>$hotelList);
				$this->load->view('admin/copyContentGenerator', $data);
			}
		}
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
		$manualbkngs_old =  $this->AdminModel->getBookingDetails_all();
		$data =array('manualbkngs'=> $manualbkngs,'manualbkngs_old'=>$manualbkngs_old);
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
	    		if ($manualbkngs->listing_id == 0) {
					$_SESSION['bookingDtls']= 'Old Format Data Entered. Please copy this to new Format. Use Listing ID instead of Hotel Name.';
	    			$this->bookingDetails();
	    		}
	    		$manualbkngItem =  $this->AdminModel->getSpcfcBookingItms($mbID);
	    		$listingdetails =  $this->AdminModel->getSpecificListingDetails($manualbkngs->listing_id)[0];
	    		// $hoteldetails =  $this->AdminModel->getSpcfcBookingItms($manualbkngs->listing_id);	    		
	    		$data =array('booking'=> $manualbkngs,'items'=>$manualbkngItem,'listingdetails'=>$listingdetails);
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
	public function hotelstatus(){
		$this->load->library('session');
		if (isset($_SESSION['hotelno'])) {
	    	if (isset($_POST['Vlisting_id']) || isset($_POST['Vstatus']) ) {
	    		$this->load->model('AdminModel');
	    		$listingDetails = $this->AdminModel->getAgentContact($_POST['Vlisting_id']);
	    		if (sizeof($listingDetails)>0) {
		    		$this->AdminModel->changeHotelStatus($_POST['Vlisting_id'],array('verification' => $_POST['Vstatus'] ));
					$_SESSION['alertHtlStatus'] = "Hotel Status of the ".$listingDetails[0]->listing_name." (#".$_POST['Vlisting_id'].") is changed to ".$_POST['Vstatus'];
	    		}
	    		else $_SESSION['alertHtlStatus'] = "No Hotel found with listing ID #".$_POST['Vlisting_id'];
	    	}	
	    	$_SESSION['hotelno'] = $_SESSION['hotelno'];
	    	$this->hotelList();
 		}
		else{
			$_SESSION['error']= 'Time is up, please log in again for your own security. (error code: hotelstatus_error)';
			redirect();
		}    
	}
	public function addDest(){
		$this->load->library('session');
		if (isset($_SESSION['hotelno'])) {
	    	if (isset($_POST['destName'])) {
	    		$this->load->model('AdminModel');
	    		$destDetails = $this->AdminModel->getDestination($_POST['destName']);
	    		if (sizeof($destDetails) == 0) {
		    		$destID = $this->AdminModel->addDestination(array('destination_name'=>$_POST['destName'],'show'=>0,'main_dest'=>0));
					$_SESSION['alertDestStatus'] = "Destination ".$_POST['destName']." is added as the destination ID #".$destID;
	    		}
	    		else $_SESSION['alertDestStatus'] = "A Destination Found with the same name, ".$_POST['destName']." which has Destination ID #".$destDetails[0]->destination_id;
	    	}	
	    	$_SESSION['hotelno'] = $_SESSION['hotelno'];
	    	$this->hotelList();
 		}
		else{
			$_SESSION['error']= 'Time is up, please log in again for your own security. (error code: addDest_error)';
			redirect();
		}    
	}
	public function showDest(){
		$this->load->library('session');
		if (isset($_SESSION['hotelno'])) {
	    	if (isset($_POST['destID']) || isset($_POST['destShow'])) {
	    		$this->load->model('AdminModel');
	    		$destDetails = $this->AdminModel->getDestinationbyID($_POST['destID']);
	    		if (sizeof($destDetails) > 0) {
		    		$this->AdminModel->showDestination($_POST['destID'], array('show'=>$_POST['destShow']));
					$_SESSION['alertDestStatus'] = "Destination ".$destDetails[0]->destination_name." (#".$_POST['destID'].") show status changed to ".$_POST['destShow'];
	    		}
	    		else $_SESSION['alertDestStatus'] = "A Destination NOT Found with the Destination ID #".$_POST['destID'];
	    	}	
	    	$_SESSION['hotelno'] = $_SESSION['hotelno'];
	    	$this->hotelList();
 		}
		else{
			$_SESSION['error']= 'Time is up, please log in again for your own security. (error code: showDest_error)';
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
	    		$agentContact =  $this->AdminModel->getAgentContact($manualbkngs->admin_id)[0];
	    		$listingdetails =  $this->AdminModel->getSpecificListingDetails($manualbkngs->listing_id)[0];
				if (isset($_POST['extranote'])) {
					$manualbkngs->note = $_POST['extranote'];
				}
	    		$Content = $this-> tentativeEmails($manualbkngs,$manualbkngItem,$agentContact,$listingdetails);
	    		$data = array('Content'=>$Content);
	    		// print_r($Content);
				$this->load->view('admin/emailContent',$data);
	    	}
	    	elseif (isset($_POST['newBooking']) && isset($_POST['paid']) && isset($_SESSION['mbID'])) {
	    		$mbID =  $_SESSION['mbID'];
	    		$this->load->model('AdminModel');
	    		$manualbkngs =  $this->AdminModel->getSpcfcBookingDetails($mbID)[0];
	    		$manualbkngItem =  $this->AdminModel->getSpcfcBookingItms($mbID);
	    		$agentContact =  $this->AdminModel->getAgentContact($manualbkngs->admin_id)[0];
	    		$listingdetails =  $this->AdminModel->getSpecificListingDetails($manualbkngs->listing_id)[0];
	    		$hoteldetails =  json_decode($this->AdminModel->getSpecificHotelDetails($manualbkngs->listing_id)[0]->cancelation_policy);
	    		print_r($hoteldetails);
				if (isset($_POST['updatedemail']) && isset($_POST['updatednic'])) {
					$manualbkngs->cemail = $_POST['updatedemail'];
					$manualbkngs->cnic = $_POST['updatednic'];
				}
				if (isset($_POST['extranote'])) {
					$manualbkngs->note = $_POST['extranote'];
				}
	    		$Content = $this-> newBookingEmails($manualbkngs,$manualbkngItem,$_POST['paid'],$agentContact,$listingdetails,$hoteldetails);
	    		$data = array('Content'=>$Content);
	    		// print_r($manualbkngs);
				$this->load->view('admin/emailContent',$data);
	    	}
	    	elseif (isset($_POST['invoiceGen']) && isset($_POST['paid']) && isset($_SESSION['mbID'])) {
	    		$mbID =  $_SESSION['mbID'];
	    		$this->load->model('AdminModel');
	    		$manualbkngs =  $this->AdminModel->getSpcfcBookingDetails($mbID)[0];
	    		$manualbkngItem =  $this->AdminModel->getSpcfcBookingItms($mbID);
	    		$listingdetails =  $this->AdminModel->getSpecificListingDetails($manualbkngs->listing_id)[0];
				if (isset($_POST['updatedemail']) && isset($_POST['updatednic'])) {
					$manualbkngs->cemail = $_POST['updatedemail'];
					$manualbkngs->cnic = $_POST['updatednic'];
				}
				$this->invoiceContent($manualbkngs,$manualbkngItem,$_POST['paid'] , $listingdetails);
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
    public function tentativeEmails($booking,$items,$agentContact,$listingdetails){
    	$roomText = "";
    	$datetime = new DateTime('tomorrow');
    	$date1obj = DateTime::createFromFormat('Y-m-d', $booking->checkin);
    	$date2obj = DateTime::createFromFormat('Y-m-d', $booking->checkout);
    	for ($rid=0; $rid < sizeof($items); $rid++) { 
    		$roomText .= $items[$rid]->qty." ".$items[$rid]->room_name." with price category ".$items[$rid]->price_type." (listed price LKR. ".$items[$rid]->room_rate." per room per day)<br>";
    	}

        $Cusheading = "inna.lk :: Details of the ".$listingdetails->listing_name;
        $Hotlheading = "inna.lk :: New Tentative Booking | CD".$booking->mb_id." | ".$booking->checkin." to ".$booking->checkout;
        $Cuscontent = "Dear ".$booking->cname.",<br><br>

        Details of the ".$listingdetails->listing_name." are mentioned herewith as you requested.<br><br>

        Booking ID: CD".$booking->mb_id."<br>
        Hotel Name: ".$listingdetails->listing_name."<br>
		Check-in: ".date_format($date1obj, 'd F, Y')." at ".date("g:i A", strtotime($booking->checkintime))." <br>
		Check-out: ".date_format($date2obj, 'd F, Y')." at ".date("g:i A", strtotime($booking->checkouttime))."<br><br>
		Rooms : ".$roomText."<br>";
		if ($booking->promo_amount > 0) {
			$Cuscontent .= "Sub Total         : LKR ".$booking->total/(1-$booking->promo_amount/100)."<br>
			Discount  : LKR ".($booking->total/(1-$booking->promo_amount/100)-$booking->total)."<br>";
		}
		$Cuscontent .= "Total                 : LKR ".number_format((float)$booking->total,2, '.', '')."<br><br>

		You Only have to pay ".$booking->payonly."% (LKR ".number_format((float)($booking->total*$booking->payonly/100),2, '.', '').") to reserve now. <br><br>

		Here are our bank details.<br><br>

		Sampath Bank - Maharagama Super Branch<br> 
		THE BEST HOTEL DEAL<br>
		109214006797<br><br>

		BOC Bank - Wijerama Branch<br>
		THE BEST HOTEL DEAL <br>
		82456678<br><br>";

		if (!empty($booking->note)) {
			$Cuscontent .="<b>Special Notes:</b><br>".$booking->note."<br><br>";
		}

		$Cuscontent .="For any inquiry related to this booking, please contact <b>".$agentContact->listing_name."</b> on <b>".$agentContact->mobile."</b><br><br>
		Thank you very much.<br><br>

		Best Regards,";

		$Hotlcontent = "Dear all,<br><br>

        You have a new booking and here are the full details of the booking:<br><br>

        This is a <b>tentative booking valid till ". $datetime->format('d F, Y')."</b> and will get confirmed once the customer deposited the advance money.<br><br>

        Booking ID: CD".$booking->mb_id."<br>
        Hotel Name: ".$listingdetails->listing_name."<br>
		Check-in: ".date_format($date1obj, 'd F, Y')." at ".date("g:i A", strtotime($booking->checkintime))." <br>
		Check-out: ".date_format($date2obj, 'd F, Y')." at ".date("g:i A", strtotime($booking->checkouttime))."<br><br>
		Rooms : ".$roomText."<br>
		Customer Name: ".$booking->cname."<br><br>";
		
		if (!empty($booking->note)) {
			$Hotlcontent .="<b>Special Notes:</b><br>".$booking->note."<br><br>";
		}

		$Hotlcontent .="Please reserve the rooms.<br><br>

		Thank you very much.<br><br>

		Best Regards,";
		return array(0 => $Cusheading, 1 => $Hotlheading,2 => $Cuscontent, 3 => $Hotlcontent);
    }
    public function newBookingEmails($booking,$items,$paid, $agentContact,$listingdetails,$hoteldetails){
    	$totalbeforSF = $booking->total/(1+$booking->service_fee/100) ;
    	$totalHotel = $totalbeforSF*(1-$booking->commission/100);
    	$roomText = "";
    	$date1obj = DateTime::createFromFormat('Y-m-d', $booking->checkin);
    	$date2obj = DateTime::createFromFormat('Y-m-d', $booking->checkout);
    	for ($rid=0; $rid < sizeof($items); $rid++) { 
    		$roomText .= $items[$rid]->qty." ".$items[$rid]->room_name." with price category ".$items[$rid]->price_type." (listed price LKR. ".$items[$rid]->room_rate." per room per day)<br>";
    	}

        $Cusheading = "inna.lk :: Your booking at ".$listingdetails->listing_name." is now confirmed | CD".$booking->mb_id;
        $Hotlheading = "inna.lk :: New Booking | CD".$booking->mb_id." | ".$booking->checkin." to ".$booking->checkout;
        $Cuscontent = "Dear ".$booking->cname.",<br><br>
        Your booking at ".$listingdetails->listing_name." is now confirmed and here are the full details of the booking:<br><br>
        Booking ID: CD".$booking->mb_id."<br>
        Hotel Name: ".$listingdetails->listing_name."<br>
		Check-in: ".date_format($date1obj, 'd F, Y')." at ".date("g:i A", strtotime($booking->checkintime))." <br>
		Check-out: ".date_format($date2obj, 'd F, Y')." at ".date("g:i A", strtotime($booking->checkouttime))."<br><br>
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
		<b>Amount that should be collected at the hotel: LKR ".number_format((float)($booking->total - $paid), 2, '.', '')."</b><br><br>";
		
		if (!empty($booking->note)) {
			$Cuscontent .="<b>Special Notes:</b><br>".$booking->note."<br><br>";
		}

		$Cuscontent .="For any inquiry related to this booking, please contact our agent (inna.lk) <b>".$agentContact->listing_name."</b> on <b>".$agentContact->mobile."</b><br>
		<b>Hotel Contact Details</b><br>
		<ul>
		<li>Main Contact Number: ".$listingdetails->main_contact."</li>
		<li>Hotel Mobile Number: ".$listingdetails->mobile."</li>
		<li>Hotel email: ".$listingdetails->email."</li>
		<li>Hotel Address: ".$listingdetails->address_line_1.", ".$listingdetails->address_line_2."</li>
		<li>Hotel Location (latitude, longitude): ".$listingdetails->latitude.", ".$listingdetails->longitude."</li>
		<li>Google Map Location: <a href='https://maps.google.com/?q=".$listingdetails->latitude.",".$listingdetails->longitude."&ll=".$listingdetails->latitude.",".$listingdetails->longitude."&z=12' target='_blank'> Click Here</a></li>
		</ul>
		( <a href='https://maps.google.com/?q=".$listingdetails->latitude.",".$listingdetails->longitude."&ll=".$listingdetails->latitude.",".$listingdetails->longitude."&z=12' target='_blank'>https://maps.google.com/?q=".$listingdetails->latitude.",".$listingdetails->longitude."&ll=".$listingdetails->latitude.",".$listingdetails->longitude."&z=12</a> )<br><br>

		<b>Cancellation Policy</b><ul>
		<li>".$hoteldetails->full_before." days and Above: Free Cancellation,</li>
		<li>".($hoteldetails->full_before - 1)." days to ".$hoteldetails->days_before." days: ".$hoteldetails->return_percentage."% Cancellation Fee (on full booking value upto maximum of advance value),</li>
		<li>".$hoteldetails->days_before." days and Below: No Cancellation. (don't panic, in most cases we bridge the difference :D )</li></ul><br>

		The invoice is attached herewith for your reference.<br><br>

		Enjoy your stay.<br><br>

		Best Regards,";

		$Hotlcontent = "Dear all,<br><br>

        You have a new booking and here are the full details of the booking:<br><br>
        Booking ID: CD".$booking->mb_id."<br>
        Hotel Name: ".$listingdetails->listing_name."<br>
		Check-in: ".date_format($date1obj, 'd F, Y')." at ".date("g:i A", strtotime($booking->checkintime))." <br>
		Check-out: ".date_format($date2obj, 'd F, Y')." at ".date("g:i A", strtotime($booking->checkouttime))."<br><br>

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
		Total charge from Customer: LKR. ".number_format((float)$booking->total,2, '.', '')."<br><br>

		Amount charged by inna.lk                                : LKR ".number_format((float)$paid,2, '.', '')."<br>
		<b>Amount that should be collected at the hotel: LKR ".number_format((float)($booking->total - $paid),2, '.', '')."</b><br><br>";
		
		if (!empty($booking->note)) {
			$Hotlcontent .="<b>Special Notes:</b><br>".$booking->note."<br><br>";
		}

		$Hotlcontent .="Please reserve the rooms.<br><br>

		Thank you very much.<br><br>

		Best Regards,";
		return array(0 => $Cusheading, 1 => $Hotlheading,2 => $Cuscontent, 3 => $Hotlcontent);
    }
}