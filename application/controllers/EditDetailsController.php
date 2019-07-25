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
			for ($roomC=0; $roomC < sizeof($rooms); $roomC++) { 
				$roomCatg =  $this->RoomModel->get_roomcat($listing_no,$roomC+1);
				for ($i=0; $i < sizeof($roomCatg); $i++) { 
	            	$baseprice = $this->RoomModel->get_baseroomprice($roomCatg[$i]->pricecategory_id)[0];
	            	$roomCatg[$i]->baseprice =$baseprice->price;
					// echo "<br>--";
					// print_r($baseprice);
					// echo "<br>--";
				}
				$rooms[$roomC]->roomCatg = $roomCatg;
				// print_r($rooms[$roomC]);
				// echo "<br><br>";
			}
			// $roomPrices =  $this->RoomModel->get_allroomcat($listing_no);
			// print_r($roomPrices);
			$data= array('data1'=> $rooms );
			$this->load->view('hotel/updateRoomPrices',$data);
		}
		else{
			$_SESSION['error']= 'Time is up, please log in again for your own security.';
			redirect();
		}

	}
	public function addNewPriceCategory(){
		// print_r($_POST);
		$this->load->library('session');
		if (isset($_SESSION['hotelno']) && isset($_SESSION['login_hotel'])) {
			$listing_no = $_SESSION['hotelno'];
			$this->load->model('RoomModel');
			$rooms =  $this->RoomModel->getRoomDetails($listing_no);
			for ($roomC=0; $roomC < sizeof($rooms); $roomC++) { 
				$roomCatg =  $this->RoomModel->get_roomcat($listing_no,$roomC+1);
				for ($i=0; $i < sizeof($roomCatg); $i++) { 
	            	$baseprice = $this->RoomModel->get_baseroomprice($roomCatg[$i]->pricecategory_id)[0];
	            	$roomCatg[$i]->baseprice =$baseprice->price;
				}
				$rooms[$roomC]->roomCatg = $roomCatg;
			}
			$data= array('data1'=> $rooms );
			$this->load->view('hotel/addRoomCategory',$data);
		}
		else{
			$_SESSION['error']= 'Time is up, please log in again for your own security.';
			redirect();
		}

	}
	public function saveNewPriceCategory(){
		$this->load->library('session');
		if (isset($_SESSION['hotelno']) && isset($_SESSION['login_hotel'])) {
			$listing_id = $_SESSION['hotelno'];
			$this->load->model('RoomModel');
            if (isset($_POST['formId']) && isset($_POST['roomTypeId']) ) {
				$i = $_POST['formId'];
				$room_type_id = $_POST['roomTypeId'];
	            if (isset($_POST['priceNameCustm'.$i]) && isset($_POST['price'.$i]) && isset($_POST['occ'.$i])&& isset($_POST['priceOther'.$i])) {
	            	$faci = array();
	            	if (isset($_POST['extraFaci'.$i])) {
	            		$faci = $_POST['extraFaci'.$i];
	            	}
		            $roomPriceCat = $this->RoomModel->get_roomcat($listing_id, $room_type_id);
		            $catdata = array('listing_id'=>$listing_id,'room_type_id'=> $room_type_id, 'price_id'=>sizeof($roomPriceCat), 'price_name'=>$_POST['priceNameCustm'.$i], 'price_other'=> $_POST['priceOther'.$i], 'price_faci'=> json_encode($faci), 'price_occ'=>$_POST['occ'.$i]);
		            $cat_id = $this->RoomModel->addPriceCat ($catdata);
					$pdata = array('pricecategory_id'=>  $cat_id, 'price'=> $_POST['price'.$i], 'valid_from'=> '2018-01-01', 'valid_till'=>'9999-12-31');
					$this->RoomModel->savePriceData ($pdata);
					$_SESSION['newCatAlert'] = "You have sucessfully added the new Price Category: <b>".$_POST['priceNameCustm'.$i]."</b>";
					$posts = $this->input->post();
					unset($posts['priceNameCustm'.$i]);
				}
	            else $_SESSION['newCatAlert'] = "Unsucessful in adding a new Price Category";
            }
            else $_SESSION['newCatAlert'] = "Unsucessful in adding a new Price Category";
			redirect('EditDetailsController/addNewPriceCategory', 'refresh');
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
			$this->load->view('hotel/addRoomPrices',$data);
		}
		else{
			$_SESSION['error']= 'Time is up, please log in again for your own security.';
			redirect();
		}
	}
	public function newroom(){
		$this->load->library('session');
		if (isset($_SESSION['hotelno']) && isset($_SESSION['login_hotel'])) {
			$listing_no = $_SESSION['hotelno'];
			$this->load->model('RoomModel');
			$rooms =  $this->RoomModel->getRoomDetails($listing_no);
			$_SESSION['post']['images'] = array();
	        $_SESSION['post']['room_images'] = array();
	        $_SESSION['post']['imageNumRoom'] = 1;
	        $_SESSION['post']['bathroom_images'] = array();
	        $_SESSION['post']['imageNumBathroom'] = 1;
			$_SESSION['post']['listing_img_dir'] = "listingNo_".$listing_no;
			$_SESSION['post']['roomCount'] = sizeof($rooms)+1;
			$this->load->view('hotel/addRoom');
		}
		else{
			$_SESSION['error']= 'Time is up, please log in again for your own security.';
			redirect();
		}

	}
	public function lastRoomRmv(){
		$this->load->library('session');
		if (isset($_SESSION['hotelno']) && isset($_SESSION['login_hotel'])) {
			$listing_no = $_SESSION['hotelno'];
			$this->load->model('RoomModel');
			$rooms =  $this->RoomModel->getRoomDetails($listing_no);
			$roomNum = sizeof($rooms);
			$roomCatg =  $this->RoomModel->get_roomcat($listing_no,$roomNum);
			$roomPic =  $this->RoomModel->getMainRoomPic($listing_no,$roomNum)[0];
			// print_r($roomPic);
			$data = array('rooms'=> $rooms[$roomNum-1],'roomCatg'=> $roomCatg,'roomPic'=> $roomPic);

			$this->load->view('hotel/lastRoom',$data);
		}
		else{
			$_SESSION['error']= 'Time is up, please log in again for your own security.';
			redirect();
		}
	}
	public function lastRoomDelete(){
		$this->load->library('session');
		if (isset($_SESSION['hotelno']) && isset($_SESSION['login_hotel'])) {
			if (isset($_POST["confirmPage"]) && isset($_POST["finishButton"]) ) {
				$listing_no = $_SESSION['hotelno'];
				$this->load->model('RoomModel');
				$rooms =  $this->RoomModel->getRoomDetails($listing_no);
				$roomNum = sizeof($rooms);
				if ($roomNum < 2) {
					$_SESSION['alerAddRoom'] = "Error: You can not delete all the rooms in the listing.";
					redirect('EditDetailsController/newroom', 'refresh');
				}
				else{
					$roomCatg =  $this->RoomModel->get_roomcat($listing_no,$roomNum);
					for ($rcat=0; $rcat < sizeof($roomCatg); $rcat++) { 
						// print_r($roomCatg[$rcat]);
						// echo "<br><br>";
						$this->RoomModel->deletePrices($roomCatg[$rcat]->pricecategory_id);
					}
					$this->RoomModel->deletePriceCategory($listing_no,$roomNum);
					$this->RoomModel->deleteAllRoomPics($listing_no,$roomNum);
					$this->RoomModel->deleteRoom($listing_no,$roomNum);
					$_SESSION['alerAddRoom'] = "You have sucessfully deleted the last room of this property.";
				}
			}
			else $_SESSION['alerAddRoom'] = "There was a issue deleting the last room. Please retry.";
			// $_POST["confirmPage"] = "second";
			$posts = $this->input->post();
			unset($posts['confirmPage']);
			redirect('EditDetailsController/newroom', 'refresh');
		}
		else{
			$_SESSION['error']= 'Time is up, please log in again for your own security.';
			redirect();
		}
	}
	public function newRoomAdd(){
		$this->load->library('session');
		if (isset($_SESSION['hotelno']) && isset($_SESSION['login_hotel'])) {
			$data = array('status'=> "notProcessed");
			if (isset($_POST['room_type']) && isset($_POST['price1'])) {
				$listing_id = $_SESSION['hotelno'];
				$this->load->model('RoomModel');
				$rooms =  $this->RoomModel->getRoomDetails($listing_id);	
				$roomcnt = sizeof($rooms);
				$facidata = array();
				if (isset($_POST['room_faci'])){
					$facidata = $_POST['room_faci'];
				}
					$room_facility_data = array($_POST['Seating']);
					$room_facility_data = array_merge($facidata,$room_facility_data); 
					$room_facility_data = json_encode($room_facility_data);

					$priceArry = array();
					$priceNameArry = array();
					$priceOccArry = array();
					$priceOtherArry = array();
					$priceFaci = array();
					$minPrice = $_POST['price1'];
					// $minPriceName = $_POST['priceName1'] ;
					if ($_POST['priceName1'] == "Other") {
						$minPriceName = $_POST['priceNameCustm1'];
					}
					else{$minPriceName = $_POST['priceName1'];}
					if (isset($_POST['priceValueCount'])) {
						for ($i=1; $i <= $_POST['priceValueCount'] ; $i++) { 
							$priceArry[] = $_POST['price'.$i];
							
							if (isset($_POST['priceOther'.$i])) {
								$priceOtherArry[] = $_POST['priceOther'.$i];
							}
							else {$priceOtherArry[] = "";} 
							if (isset($_POST['occ'.$i])) {
								$priceOccArry[] = $_POST['occ'.$i];
							}
							else {
								$priceOccArry[] = $_POST['occupancy'];
								echo "error in occ, check it again.";
							}
							if ($_POST['priceName'.$i] == "Other") {
								$pName = $_POST['priceNameCustm'.$i];
							}
							else{$pName = $_POST['priceName'.$i];}
							$priceNameArry[] = $pName;


							if (isset($_POST['extraFaci'.$i])){
								$priceFaci[] = $_POST['extraFaci'.$i];
							}
							else{ $priceFaci[] = array();}
							
							if ($minPrice > $_POST['price'.$i]) {
								$minPrice = $_POST['price'.$i];
								$minPriceName = $pName;
							}
						}
					}
					$price_array = array('priceArry'=>$priceArry,'priceNameArry'=>$priceNameArry,'priceOtherArry'=>$priceOtherArry,'priceFaci'=>$priceFaci,'priceOccArry'=>$priceOccArry);
					$min_price_array = array('minPriceName'=>$minPriceName,'minPrice'=>$minPrice);
					$room_listing_data = array('listing_id'=> $listing_id ,'room_type_id'=>($roomcnt+1) ,'room_type'=>$_POST['room_type'],'room_name'=>$_POST['room_name'],'bathroom_type'=>$_POST['bathroom_type'] ,'min_price'=>(!empty($min_price_array) ? json_encode($min_price_array) : null) ,'price_details'=>(!empty($price_array) ? json_encode($price_array) : null),'no_of_people'=>$_POST['occupancy'],'max_no_of_guests'=>$_POST['max_occupancy'],'room_facilities'=>$room_facility_data ,'no_of_rooms'=>$_POST['each_room_count'],'room_image'=> "controlpanel/backend/assets/images/listings/listingNo_".$listing_id."/".$_SESSION['post']['room_images'][0] ,'other_on_faci'=> $_POST['other_amenities']);
					$this->RoomModel->addRoomType($room_listing_data);
				for ($priceTypes =0; $priceTypes  < sizeof($priceArry); $priceTypes ++) {
		            $catdata = array('listing_id'=>$listing_id,'room_type_id'=> $roomcnt+1, 'price_id'=>$priceTypes, 'price_name'=>$priceNameArry[$priceTypes], 'price_other'=> $priceOtherArry[$priceTypes], 'price_faci'=> json_encode($priceFaci[$priceTypes]), 'price_occ'=>$priceOccArry[$priceTypes]);
		            $cat_id = $this->RoomModel->addPriceCat ($catdata);
					$pdata = array('pricecategory_id'=>  $cat_id, 'price'=> $priceArry[$priceTypes], 'valid_from'=> '2018-01-01', 'valid_till'=>'9999-12-31');
					$this->RoomModel->savePriceData ($pdata);
				}			
					$room_pics_data = array('listing_id'=> $listing_id,'image_path'=> "controlpanel/backend/assets/images/listings/listingNo_".$listing_id."/".$_SESSION['post']['room_images'][0],'room_type_id'=>($roomcnt+1),'is_main'=> 1);
					$this->RoomModel->addRoomPic($room_pics_data);
				foreach ($_SESSION['post']['bathroom_images'] as $value) {
					$bathroom_pics_data = array('listing_id'=> $listing_id,'image_path'=> "controlpanel/backend/assets/images/listings/listingNo_".$listing_id."/".$value,'room_type_id'=>($roomcnt+1),'is_main'=>0);
					$this->RoomModel->addRoomPic($bathroom_pics_data);
				}
				$data = array('status'=> "done");
			}
			unset($_POST);
			$_POST = array();			
			$this->load->view('hotel/doneAddingRoom',$data);
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
	public function updateHotelRules(){
		$this->load->library('session');
		if (isset($_SESSION['hotelno']) && isset($_SESSION['login_hotel'])) {
			$this->load->helper('form');
			$this->load->helper('url');
			$data1=array();
			if(isset($_POST['editorrules'])){
				$this->load->model('ListingsModel');
				if(isset($_SESSION)){
					$listing_id = $_SESSION['hotelno'];
				}
				$data1 = array(  
					'other_policies' =>$_POST['editorrules']
					);
				$this->ListingsModel->updateListingsRules($listing_id,$data1);

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
    public function removePriceCategory(){	    	
		$this->load->library('session');
		if (isset($_SESSION['hotelno']) && isset($_SESSION['login_hotel'])) {
			if (isset($_POST["pricecategory_id"]) ) {
				$pricecategory_id = $_POST["pricecategory_id"];
				$this->load->model('RoomModel');
				$priceCategoryData = $this->RoomModel->get_roomcatbyId($pricecategory_id)[0];
				if ($priceCategoryData->price_id < 1) {
					$_SESSION['errorURP'] = "You can't delete Price Category with ID: ".$pricecategory_id." because it is the only price category for the room.";
					redirect('EditDetailsController/roomDetails', 'refresh');
				}
				else{
					// print_r($priceCategoryData);
					$this->RoomModel->deletePrices($pricecategory_id);
					$this->RoomModel->deleteOnePriceCategory($pricecategory_id);
					$_SESSION['errorURP'] = "Sucessfully removed last Price Category with ID: ".$pricecategory_id;
				}
			}
			else	$_SESSION['errorURP'] = "There wasa an error when trying to delete last Price Category.";
			redirect('EditDetailsController/roomDetails', 'refresh');
		}
		else{
			$_SESSION['error']= 'Time is up, please log in again for your own security.';
			redirect();
		}
    }
    public function photoUpload(){
	    	$this->load->library('session');
	    	if (isset($_SESSION['username'])){
		    	if (isset($_FILES["photo"])) { 
		    		$name ="userPhoto_".$_SESSION['owner_id'];
					    $target_dir = "assets/images/users/";
					    if (!is_dir($target_dir)){
					    	mkdir($target_dir, 0777,true);
					    }
					    
					    $imageFileType = 'png';// pathinfo($_FILES["photo"]["name"],PATHINFO_EXTENSION);
					    $name = $name.".".$imageFileType;  
					    $target_file = $target_dir . basename($name);   
					    $uploadOk = 1;
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
            if (isset($_POST['roomprice'.$i]) && isset($_POST['pricename'.$i]) && isset($_POST['extraFaci'.$i.'0']) && isset($_POST['priceOtherArry'.$i])&& isset($_POST['priceOccArry'.$i])) {
	            
				$room_type_id = $_POST['roomTypeId'];
					$roomprice_arr = $_POST['roomprice'.$i];
		            $roomPriceCat = $this->RoomModel->get_roomcat($listing_id, $room_type_id);
					foreach ($roomprice_arr as $key => $value) {
						$roomprice_arr[$key]= str_replace(',', '', $value);
					}
	                $field1_array = $roomprice_arr;
	                $field2_array = $_POST['pricename'.$i];
	                $field3_array = array(); // json_decode($_POST['pricefaci'.$i]);
	                $field4_array =  json_decode($_POST['priceOtherArry'.$i]);
	                // echo "<br><br>";
	                // print_r(json_decode($_POST['pricefaci'.$i]));
	                // echo "<br><br>";
	                if ($_POST['roomocc'.$i] == null) {
		                $field5_array =  array_fill(0, sizeof($field4_array), "");
	                }
	                else{
		                $field5_array =  $_POST['roomocc'.$i];              	
	                }
					for ($catlen=0; $catlen < sizeof($roomPriceCat); $catlen++) { 
						$field3_array[] = $_POST['extraFaci'.$i.''.$catlen];
		            	$baseprice = $this->RoomModel->get_baseroomprice($roomPriceCat[$catlen]->pricecategory_id)[0];
		            	$this->RoomModel->update_baseroomprice($baseprice->id, $roomprice_arr[$catlen]); // update the base price (expiry unlimited)
		            	$this->RoomModel->update_pricecat($roomPriceCat[$catlen]->pricecategory_id, array('price_occ'=> $field5_array[$catlen] , 'price_name'=> $field2_array[$catlen] , 'price_faci'=> json_encode($field3_array[$catlen]) )); // update the occupancy for the room
					}
	                // echo "<br><br>";
	                // print_r($field3_array);
	                // echo "<br><br>";
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
				}
				else{
					$_SESSION['errorURP'] = "Error in saving the new price, please try again.";
				}

            }
            $this->newpriceset();
        }
}