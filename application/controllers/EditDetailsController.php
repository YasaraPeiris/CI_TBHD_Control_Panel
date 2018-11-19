<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EditDetailsController extends CI_Controller {

	public function hotelDetails(){
		$this->load->library('session');
		if (isset($_SESSION['hotelno']) && isset($_SESSION['login_hotel'])) {
			$listing_no = $_SESSION['hotelno'];
			$this->load->model('ListingsModel');
			$listing =  $this->ListingsModel->getListingDetails($listing_no);
			$hoteldetail =  $this->ListingsModel->getHotelDetail($listing_no);
			$data= array('data1'=> $listing[0]->main_facilities, 'data2'=>$listing[0] ,'data3'=>$hoteldetail[0] );
			$this->load->view('hotel/hotelDetails',$data);
		}
		else{
			$_SESSION['error']= 'Time is up, please log in again for your own security.';
			redirect();
		}

	}

	public function mainimages(){
		$this->load->library('session');
		if (isset($_SESSION['hotelno']) && isset($_SESSION['login_hotel'])) {
			$listing_no = $_SESSION['hotelno'];
			$this->load->model('RoomModel');
			$rooms =  $this->RoomModel->getRoomDetails($listing_no);
			$data= array('data1'=> $rooms );
			// echo "<br>----------<br>";
			// print_r($data);
			$this->load->view('hotel/updateMainImages',$data);
		}
		else{
			$_SESSION['error']= 'Time is up, please log in again for your own security.';
			redirect();
		}
	}

	public function roomDetails(){
		$this->load->library('session');
		if (isset($_SESSION['hotelno']) && isset($_SESSION['login_hotel'])) {
			$listing_no = $_SESSION['hotelno'];
			$this->load->model('RoomModel');
			$rooms =  $this->RoomModel->getRoomDetails($listing_no);
			$data= array('data1'=> $rooms );
			// echo "<br>----------<br>";
			// print_r($data);
			$this->load->view('hotel/updateRoomPrices',$data);
		}
		else{
			$_SESSION['error']= 'Time is up, please log in again for your own security.';
			redirect();
		}

	}
	public function newpriceset(){
		$this->load->library('session');
		if (isset($_SESSION['hotelno']) && isset($_SESSION['login_hotel'])) {
			$listing_no = $_SESSION['hotelno'];
			$this->load->model('RoomModel');
			$rooms =  $this->RoomModel->getRoomDetails($listing_no);
			$data= array('data1'=> $rooms );
			// echo "<br>----------<br>";
			// print_r($data);
			$this->load->view('hotel/addRoomPrices',$data);
		}
		else{
			$_SESSION['error']= 'Time is up, please log in again for your own security.';
			redirect();
		}

	}
	public function roomPics(){
		$this->load->library('session');
		if (isset($_SESSION['hotelno']) && isset($_SESSION['login_hotel'])) {
			$listing_no = $_SESSION['hotelno'];
			$this->load->model('ListingsModel');
			$listing_pics =  $this->ListingsModel->getListingPics($listing_no);
			$data= array('data'=> $listing_pics );
			$this->load->view('hotel/hotelDetails',$data);
		}
		else{
			$_SESSION['error']= 'Time is up, please log in again for your own security.';
			redirect();
		}
	}

	public function viewMyAccount(){
		$this->load->library('session');  // *************** account for session time out ******************
		$this->load->view('myAccount');
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

	public function updateHotelDescription(){
		$this->load->library('session');
		if (isset($_SESSION['hotelno']) && isset($_SESSION['login_hotel'])) {
			$this->load->helper('form');
			$this->load->helper('url');
			$data1=array();
			if(isset($_POST['editor1'])){
				$this->load->model('ListingsModel');
				if(isset($_SESSION)){
					$listing_id = $_SESSION['hotelno'];
				}
				$data1 = array(  
					'listing_desc' =>$_POST['editor1']
					);
				$this->ListingsModel->updateListingsDescription($listing_id,$data1);

			}
			$this->hotelDetails();
		}
		else{
			$_SESSION['error']= 'Time is up, please log in again for your own security.';
			redirect();
		}

	}

	public function updateFacilities(){
		$this->load->library('session');
		if (isset($_SESSION['hotelno']) && isset($_SESSION['login_hotel'])) {
			$this->load->helper('form');
			$this->load->helper('url');
			$data1=array();
			if(!empty($_POST['check_list'])) {
				$this->load->model('ListingsModel');
				if(isset($_SESSION)){
					$listing_id = $_SESSION['hotelno'];
				}
				foreach($_POST['check_list'] as $check) {
					array_push($data1,$check);
				}
				$data = json_encode($data1);
			$data2 = array(  
					'main_facilities' =>$data
					);	
			$this->ListingsModel->updateFacilities($listing_id,$data2);
			}	
			$this->hotelDetails();
		}
		else{
			$_SESSION['error']= 'Time is up, please log in again for your own security.';
			redirect();
		}

	}
	    public function photoUpload(){
	    	$this->load->library('session');
			// if(isset($_SESSION)){
				// log_message('debug', print_r($_SESSION,true));
			// 	log_message('debug',$_SESSION['username']);
			// }
	    	// log_message('debug',"aaaaaaaaaaaabbbbbbbbbbbbaaaaaaaaaaaaa");
			// session_start();
			// isset($_SESSION['username'])
	    	if (isset($_SESSION['username'])){
		    	if (isset($_FILES["photo"])) { 
		    		// .$_SESSION['username']
		    		$name ="userPhoto_".$_SESSION['owner_id']; //."_".$_SESSION['username']
		    		// if (isset($_SESSION['post']['listing_img_dir'])){
		    			// $dir = "backend/assets/images/users/";
		    		// }
		    		// else{
				    	// if ($_SESSION['post']['listing_type'] == 'hotel') {  
					    // 	$dir = "dest_".$_SESSION['post']['destination_id']."_".trim($_SESSION['post']['hotel_name'],' ');
					    // }
					    // else{
					    // 	$dir = "dest_".$_SESSION['post']['destination_id']."_".trim($_SESSION['post']['subject'],' ') ;
					    // }
					    // $_SESSION['post']['listing_img_dir'] = $dir;
					// }
					    // log_message('debug', print_r($_FILES,true));
					    // log_message('debug', $dir);
					    // log_message('debug',"doneeeeeeee");
					    $target_dir = "assets/images/users/";
					    if (!is_dir($target_dir)){
					    	mkdir($target_dir, 0777,true);
					    }
					    
					    $imageFileType = 'png';// pathinfo($_FILES["photo"]["name"],PATHINFO_EXTENSION);
					    $name = $name.".".$imageFileType;  
					    $target_file = $target_dir . basename($name);   
					    $uploadOk = 1;
					    // print_r($_FILES)
					    // log_message('debug', $target_file);
					    // Check if image file is a actual image or fake image
					    if(isset($_POST["submit"])) {
					        $check = getimagesize($_FILES["photo"]["tmp_name"]);
					        if($check !== false) {
					            // echo "File is an image - " . $check["mime"] . ".";
					            $uploadOk = 1;
					        } else {
					        	$_SESSION['error_page5'] = "File is not an image."; 
					        	// $this->load->view('new_listing/C5_photos');
					            // echo "File is not an image.";
					            $uploadOk = 0;
					        }
					    }
					    if ($_FILES["photo"]["size"] > 2000000) {
					    	$_SESSION['error_page5'] = "Sorry, your file is too large. Can you please upload photos which are smaler than 1.8MB, each."; 
					    	// $this->load->view('new_listing/C5_photos');
					        // echo "Sorry, your file is too large.";
					        $uploadOk = 0;
					    }
					    // Allow certain file formats
					    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
					    && $imageFileType != "gif" ) {
					    	$_SESSION['error_page5'] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed."; 
					    	// $this->load->view('new_listing/C5_photos');
					        // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
					        $uploadOk = 0;
					    }
					    // Check if $uploadOk is set to 0 by an error
					    if ($uploadOk == 0) {
					    	// $_SESSION['error_page5'] += "<br>your file was not uploaded."; 
					    	// $this->load->view('new_listing/C5_photos');
					        // echo "Sorry, your file was not uploaded.";
					        return false;
					    // if everything is ok, try to upload file
					    } 
					    else {
					        if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
					        	// $_SESSION['error_page5'] = "Sorry, file already exists."; 
					    	    // $this->load->view('new_listing/C4_description');
					    	    // $_SESSION['post'][$imageArray][] = $name;
					    	    $this->load->model('LoginModel');
					    	    $path = "assets/images/users/".$name;
					    	    // log_message('debug', print_r($_SESSION,true));
					    	    $listing_pics =  $this->LoginModel->LoginPics($path, $_SESSION['owner_id']);
					    	    // $_SESSION['post']['imageNum'] = $_SESSION['post']['imageNum'] +1;

					    	    return true;
					            // echo "The file ". basename( $_FILES["photo"]["name"][$i]). " has been uploaded.";
					        } else {
					        	$_SESSION['error_page5'] = "Sorry, there was an unexpected error uploading your file."; 
					    	    // $this->load->view('new_listing/C5_photos');
					    	     return false;
					            // echo "Sorry, there was an error uploading your file.";
					        }
					    }
					    
				}
			}
	    }

	    public function saveDetails(){
            $this->load->library('session');
            $this->load->model('RoomModel');
            $listing_id = $_SESSION['hotelno'];
            if (isset($_SESSION['hotelno']) && isset($_SESSION['login_hotel']) &&  isset($_POST['formId']) ) {
			// print_r($_POST);
            $i = $_POST['formId'];
            if (isset($_POST['roomprice'.$i]) && isset($_POST['pricename'.$i]) && isset($_POST['pricefaci'.$i]) && isset($_POST['priceOtherArry'.$i])&& isset($_POST['priceOccArry'.$i])) {
	            
				$room_type_id = $_POST['roomTypeId'];
					$roomprice_arr = $_POST['roomprice'.$i];
		            $roomPriceCat = $this->RoomModel->get_roomcat($listing_id, $room_type_id);
					foreach ($roomprice_arr as $key => $value) {
						$roomprice_arr[$key]= str_replace(',', '', $value);
					}
	                $field1_array = $roomprice_arr;
	                $field2_array = $_POST['pricename'.$i];
	                $field3_array =  json_decode($_POST['pricefaci'.$i]);
	                $field4_array =  json_decode($_POST['priceOtherArry'.$i]);

	                if ($_POST['roomocc'.$i] == null) {
		                $field5_array =  array_fill(0, sizeof($field4_array), "");
	                }
	                else{
		                $field5_array =  $_POST['roomocc'.$i];              	
	                }
					for ($catlen=0; $catlen < sizeof($roomPriceCat); $catlen++) { 
		            	$baseprice = $this->RoomModel->get_baseroomprice($roomPriceCat[$catlen]->pricecategory_id)[0];
		            	$this->RoomModel->update_baseroomprice($baseprice->id, $roomprice_arr[$catlen]);
		            	$this->RoomModel->update_pricecat_occ($roomPriceCat[$catlen]->pricecategory_id, $field5_array[$catlen]);
					}
	                $price_array = array("priceArry"=>$field1_array,"priceNameArry"=>$field2_array,"priceFaci"=>$field3_array,"priceOtherArry"=>$field4_array,"priceOccArry"=>$field5_array);		


	                $lowest_key = array_keys($field1_array, min($field1_array));

	                $lowest_price = $field1_array[$lowest_key[0]];

	                $lowest_price_name = $field2_array[$lowest_key[0]];
	                $min_array =  array("minPriceName"=>$lowest_price_name,"minPrice"=>$lowest_price);
	                    $roomtype = $_POST['optradio'.$i];

	                    $faci = $_POST['room_faci'.$i];
	//                    print_r($faci);
	                    $faci_radio = $_POST['room_faci_radio'.$i];
	//                    print_r($faci_radio);
	                $full_faci = array_merge($faci,$faci_radio);
	                $full_faci = json_encode($full_faci);


	                $roomname = $_POST['room_name'.$i];

	                $bathtype= $_POST['bathroom_type'.$i];

	                $occupancy = $_POST['occupancy'.$i];

	                $max_occupancy = $_POST['max_occupancy'.$i];

	                $room_count = $_POST['each_room_count'.$i];


	                $this->load->model('RoomModel');
	                $data=array('room_facilities'=>$full_faci,'room_name'=>$roomname,'room_type'=>$roomtype,'bathroom_type'=>$bathtype,'no_of_people'=>$occupancy,'max_no_of_guests'=>$max_occupancy,'price_details'=>json_encode($price_array),'min_price'=>json_encode($min_array),'no_of_rooms'=>$room_count);
	                // print_r($data);
	                $this->RoomModel->updateRoomDetails($data,$listing_id,$room_type_id);
	//            $this->AccountModel->editAccountDetails($data2,$login_id);
			}
			else{
				$_SESSION['errorURP'] = "Error in changing the price, please try again.";
			}

            }
            $this->roomDetails();

        }
	    public function saveNewPriceDetails(){
            $this->load->library('session');
            $this->load->model('RoomModel');
            $listing_id = $_SESSION['hotelno'];
            if (isset($_SESSION['hotelno']) && isset($_SESSION['login_hotel']) &&  isset($_POST['formId']) ) {
	            $i = $_POST['formId'];
	            if (isset($_POST['roomTypeId']) && isset($_POST['strtDate']) &&  isset($_POST['endDate'])&& isset($_POST['priority']) &&  isset($_POST['roomprice'.$i])) {
	            	// echo "---room type id---- ".$_POST['roomTypeId']." -----listing id------". $listing_id."<br>";
					$room_type_id = $_POST['roomTypeId'];
					$roomprice_arr = $_POST['roomprice'.$i];
		            $roomPriceCat = $this->RoomModel->get_roomcat($listing_id, $room_type_id);
		            // print_r($roomprice_arr);
		            // echo "<br>";
					foreach ($roomprice_arr as $key => $value) {
						$roomprice_arr[$key]= str_replace(',', '', $value);
	        			// echo "---key ".$key." --price---- ".$value."<br>";
					}
					foreach ($roomPriceCat as $key => $value) {
						// $roomprice_arr[$key]= str_replace(',', '', $value);
						$newprice_array = array("pricecategory_id"=>$value->pricecategory_id,"price"=>$roomprice_arr[$value->price_id],"valid_from"=>$_POST['strtDate'],"valid_till"=>$_POST['endDate'],"priority"=>$_POST['priority']);
						// print_r($newprice_array);
		                $this->load->model('RoomModel');
		                $this->RoomModel->savePriceData($newprice_array);
	        			// echo "---<br>";
					}
					// print_r($roomPriceCat);
		   //              $field1_array = $roomprice_arr;
		   //              $field2_array = $_POST['pricename'.$i];

		   //              $field3_array =  json_decode($_POST['pricefaci'.$i]);
		   //              $field4_array =  json_decode($_POST['priceOtherArry'.$i]);

		   //              if ($_POST['priceOccArry'.$i] == null) {
			  //               $field5_array =  array_fill(0, sizeof($field4_array), "");
		   //              }
		   //              else{
			  //               $field5_array =  json_decode($_POST['priceOccArry'.$i]);              	
		   //              }
		   //              $price_array = array("priceArry"=>$field1_array,"priceNameArry"=>$field2_array,"priceFaci"=>$field3_array,"priceOtherArry"=>$field4_array,"priceOccArry"=>$field5_array);
		                
		   //              $data=array('price_details'=>json_encode($price_array));
		   //              
				}
				else{
					$_SESSION['errorURP'] = "Error in saving the new price, please try again.";
				}

            }
            $this->newpriceset();
        }
}