<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HotelDetailController extends CI_Controller {

	public function index(){
		$this->load->helper('cookie');
		$this->load->library('session');
		if ((!isset($_COOKIE['hotelno']) || $this->input->cookie('login_user')!= 'admin') && (!isset($_SESSION['hotelno']) || $this->session->userdata('login_user')!= 'admin')) {
			$_SESSION['error']= 'Time is up, please log in again for your own security.';
			redirect();
		}
		$this->load->model('AdminModel');
		$listing =  $this->AdminModel->getVerifiedHotelDetails();
		$adminData =  $this->AdminModel->getAccountDetails($_SESSION['hotelno'])[0];
		$data= array('hotels'=> $listing ,'admindata'=> $adminData);
		$this->load->view('admin/hotelListButtons',$data);
	}
	public function logins(){
		$this->load->helper('cookie');
		$this->load->library('session');
		if (isset($_SESSION['hotelno']) && $this->session->userdata('login_user')== 'admin') {
			$this->load->model('AdminModel');
			$logins =  $this->AdminModel->getLogin();
			$adminData =  $this->AdminModel->getAccountDetails($_SESSION['hotelno'])[0];
			$data =array('logins'=> $logins,'admindata'=> $adminData);
			$this->load->view('admin/hotelLogins',$data);
		}
		else{			
			$_SESSION['error']= 'Time is up, please log in again for your own security.';
			redirect();
		}
	}
    public function newRoomData($listing_id,$date1,$date2)
    {
        $this->load->model('AdminModel');
        $roomData = $this->AdminModel->get_roomtypes($listing_id);
        if (sizeof($roomData)>0) {
            foreach ($roomData as $key => $value) {
                $priceCatData = $this->AdminModel->get_roomcat($listing_id, $value->room_type_id);
                $newArray = array('priceArry'=>array(),'priceNameArry'=>array(),'priceOtherArry'=>array(),'priceFaci'=>array(),'priceOccArry'=>array());
                foreach ($priceCatData as $key2 => $value2) {
                    $priceData = $this->AdminModel->getbestprice($value2->pricecategory_id,$date1,$date2)[0];
                    $newArray['priceArry'][]=$priceData->price;
                    $newArray['priceNameArry'][]=$value2->price_name;
                    $newArray['priceOtherArry'][]=$value2->price_other;
                    $newArray['priceFaci'][]=json_decode($value2->price_faci);
                    $newArray['priceOccArry'][]=$value2->price_occ;
                }
                $roomData[$key]->price_details = json_encode($newArray);
            }
        }
        return $roomData;
    }
    public function calRoomAvail($room_data, $booking_details, $date1obj, $date2obj)
    {

        // $roomPrices = array();
        $this->load->model('ListingsModel');

        $roomAvailability = array();
        $roomCount = array(); // to select rooms
        $roomMaxCount = array();
        $roomPricesFull = array();
        $roomMaxCountTemp = array();
        foreach ($room_data as $value) {
            $roomAvailability[] = $value->no_of_rooms;
            $roomMaxCount[] = 0;
            $roomMaxCountTemp[] = 0;
            $roomPricesFull[] = json_decode($value->price_details)->priceArry;

            // $minRoomVal = json_decode($value-> min_price)->minPrice;
            // if ($minPrice > $minRoomVal ) {
            $minPrice[] = json_decode($value->min_price)->minPrice;
            // }

            $roomCountTemp = array();
            for ($i = 0; $i < sizeof(json_decode($value->price_details)->priceArry); $i++) {
                $roomCountTemp[] = 0;
            }
            $roomCount[] = $roomCountTemp;
        }
        // array_pop ( $roomCount );
        //  **** think about this later
        // $roomCount [0][0] = 1;

        // echo "<br><br>";
        // echo $roomCount [0][0];
        // print_r($minPrice);

        //  calculating how many rooms available for given date range
        if ($booking_details != null) {
            $period = new DatePeriod($date1obj, new DateInterval('P1D'), $date2obj);
            foreach ($period as $dt) {
                $date = $dt->format("Y-m-d");
                $dayRoomCount = $roomMaxCountTemp;
                // echo '<br>for the date '.$date.'<br>';
                foreach ($booking_details as $book_value) {
                    if ($date >= $book_value->check_in && $date < $book_value->check_out) {
                        $booked_room_data = $this->AdminModel->get_booked_rooms($book_value->booking_id);
                        // print_r( $booked_room_data);
                        foreach ($booked_room_data as $room_value) {
                            // echo "<br>";
                            // print_r($room_value);
                            $dayRoomCount[($room_value->room_type_id) - 1] = $dayRoomCount[($room_value->room_type_id) - 1] + $room_value->quantity;
                        }
                    }
                }
                foreach ($roomMaxCount as $key => $value) {
                    if ($dayRoomCount[$key] > $value) {
                        $roomMaxCount[$key] = $dayRoomCount[$key];
                        // echo "<br>";
                        // print_r($roomMaxCount);echo "<br>";
                    }
                }
            }
        }
        // $minPriceWithAvail = array();
        $minPriceLocal = INF;//json_decode($room_data[0]-> min_price)->minPrice;
        $minPriceLocalIdx = 0;
        // $zeroAvail = 0;
        for ($i = 0; $i < sizeof($roomAvailability); $i++) {
            $roomAvailability[$i] = $roomAvailability[$i] - $roomMaxCount[$i];
            if ($roomAvailability[$i] > 0 && $minPriceLocal > $minPrice[$i]) {
                // $minPriceWithAvail[] = $minPrice[$i];
                // $minRoomVal = json_decode($value-> min_price)->minPrice;
                // if ($minPriceLocal > $minRoomVal ) {
                $minPriceLocal = $minPrice[$i];
                $minPriceLocalIdx = $i;
                // }
            }
        }
        $minKey = 0;
        foreach ($roomPricesFull[$minPriceLocalIdx] as $key => $value) {
            if ($value == $minPriceLocal) {
                $minKey = $key;
            }
        }
        return array($roomAvailability, $roomCount, $minPriceLocalIdx, $minKey);
    }
	public function showHotel(){
		$this->load->helper('cookie');
		$this->load->library('session');
		if ((!isset($_COOKIE['hotelno']) || $this->input->cookie('login_user')!= 'admin') && (!isset($_SESSION['hotelno']) || $this->session->userdata('login_user')!= 'admin')) {
			$_SESSION['error']= 'Time is up, please log in again for your own security.';
			redirect();
		}
		$this->load->model('AdminModel');
		$listing_id = $this->input->get('listing_id');
		$destination_id = $this->input->get('destination');
		$guest_count = 2;
		if ( isset($_SESSION['checkin']) & isset($_SESSION['checkout'])){
			$checkin =  $_SESSION['checkin'];
			$checkout =  $_SESSION['checkout'];
		}
		else{
	        $date = strtotime("+13 day");
	        $checkin = date('m/d/Y', $date);
	        $date = strtotime("+14 day");
	        $checkout = date('m/d/Y', $date);
	    }
        // echo $checkin;
        // echo "<br>";
        // echo $checkout;
    	$available_flag = 1;
		$listing_data =  $this->AdminModel->getAllSpecificListingDetails($listing_id);
		$this->session->set_userdata('listing_id', $listing_id);
		$this->session->set_userdata('listing_type', "hotel");
		//$this->session->set_userdata('default', $listing_type);
		$this->session->set_userdata('destination_id', $destination_id);
		$this->session->set_userdata('checkin', $checkin);
		$this->session->set_userdata('checkout', $checkout);
		$this->session->set_userdata('guest_count', $guest_count);
		$this->session->set_userdata('listing_name', $listing_data[0]->listing_name);
		$this->session->set_userdata('listing_address_1', $listing_data[0]->address_line_1);
		$this->session->set_userdata('listing_address_2', $listing_data[0]->address_line_2);
		if ($listing_data[0]->verification == "rejected") {
		    $_SESSION['alertHtlDStatus'] = " Rejected Hotel!!!";
		    // redirect();
		}
		// $lisitng_list = $this->HotelApartmentModel->get_data($destination_id);
		// $listing_images = $this->HotelApartmentModel->get_images($listing_id);
		$owner_details = $this->AdminModel->get_owner($listing_data[0]->owner_id);
		// $room_img = $this->HotelApartmentModel->get_room_img($listing_id);
		// changing the date format to fit sql format, this can be reduced by converting mainsite date fields to the same.
		$date1obj = DateTime::createFromFormat('m/d/Y', $checkin);
		$date2obj = DateTime::createFromFormat('m/d/Y', $checkout);
		$date1obj->setTime(0, 0);
		$date2obj->setTime(0, 0);
		$date1 = date_format($date1obj, 'Y-m-d');
		$date2 = date_format($date2obj, 'Y-m-d');
		$booking_details = $this->AdminModel->get_bookings($listing_id, $date1, $date2);


		$now = time(); // or your date as well
		$your_date = strtotime($date1);
		$datediff = floor(($your_date - $now) / (60 * 60 * 24));

		$db_data = $this->AdminModel->get_hotel($listing_id);
		if (($db_data[0]->confirm_before) > $datediff) {
		    $_SESSION['alertHtlDStatus'] = " Sorry, The minimum time given by the hotel to book is surpassed. Please try again.";
		    // redirect();
		}
		$room_data = $this->newRoomData($listing_id,$date1,$date2);
		$minPrice = array();// json_decode($room_data[0]-> min_price)->minPrice;

		list($roomAvailability, $roomCount, $minPriceLocalIdx, $minKey) = $this->calRoomAvail($room_data, $booking_details, $date1obj, $date2obj);
		$roomPricesFull = array();
		$roomNames = array();
		$roomMaxCount = array();
		$roomMaxCountTemp = array();
		$roomMaxPplCount = array();
		foreach ($room_data as $value) {
		    $roomNames[] = $value->room_name;
		    $roomMaxCount[] = 0;
		    $roomMaxCountTemp[] = 0;
		    $roomMaxPplCount[] = $value->max_no_of_guests;
		    $minPrice[] = json_decode($value->min_price)->minPrice;
		    $roomPricesFull[] = json_decode($value->price_details)->priceArry;
		}
		$maxOccpncy = 0;
		$zeroAvail = 0;
		$countarry = array();
		for ($i = 0; $i < sizeof($roomAvailability); $i++) {
		    if ($roomAvailability[$i] < 1) {
		        $zeroAvail += 1;
		    }
		    $maxOccpncy += $roomAvailability[$i] * $roomMaxPplCount[$i];
		    $countarry[] = $roomMaxPplCount[$i];
		}
		if ($zeroAvail == sizeof($roomAvailability)) {
		    $available_flag = 0;
		    $_SESSION['error_hotel'] = " Sorry, no rooms available on the dates currently selected. Please select a different date range.";
		    //redirect();
		}
		$promotions = $this->AdminModel->get_promotions($listing_id, $checkin, $checkout)[0];
		if ($promotions == null) {
		    $promotions = (object)array('promo_amount' => 0);
		}
		$data = array('status' => 'hotel', 'promotions' => $promotions, 'moredetails' => $db_data[0], 'commondetails' => $listing_data[0], 'roomtypes' => $room_data,  'owner_details' => $owner_details[0], 'roomPricesFull' => $roomPricesFull, 'roomCount' => $roomCount, 'roomNames' => $roomNames, 'roomAvailability' => $roomAvailability, 'countarry' => $countarry, 'maxOccpncy' => $maxOccpncy, 'minRoomName' => $roomNames[$minPriceLocalIdx], 'minRoomVal' => $roomPricesFull[$minPriceLocalIdx][$minKey],'available_flag'=> $available_flag);


		$this->load->view('admin/hotel',$data);
	}
	public function changeHotelInfo(){
		$this->load->helper('cookie');
		$this->load->library('session');
		if ((!isset($_COOKIE['hotelno']) || $this->input->cookie('login_user')!= 'admin') && (!isset($_SESSION['hotelno']) || $this->session->userdata('login_user')!= 'admin')) {
			$_SESSION['error']= 'Time is up, please log in again for your own security.';
			redirect();
		}
		$this->load->model('AdminModel');
		$data = array("other_insights"=> $_POST["insightData"]);
		$this->AdminModel->changeHotelStatus($_POST["listingId"],$data);
		return "Success";
	}	
}