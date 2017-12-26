<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EditImagesController extends CI_Controller
{

    public function getImages()
    {
        $this->load->library('session');
        if (isset($_SESSION['hotelno']) && isset($_SESSION['login_hotel'])) {
            $listing_no = $_SESSION['hotelno'];
            $this->load->model('ListingsModel');
            $images = $this->ListingsModel->getListingPics($listing_no);
            $data = array('images' => $images);

            $this->load->view('hotel/updateMainImages', $data);
        } else {
            $_SESSION['error'] = 'Time is up, please log in again for your own security.';
            redirect();
        }

    }

    public function roomimages(){
        $this->load->library('session');
        $data_rooms= array();
        if (isset($_SESSION['hotelno']) && isset($_SESSION['login_hotel'])) {
            $listing_no = $_SESSION['hotelno'];
            $this->load->model('RoomModel');
            $rooms_pics =  $this->RoomModel->getRoomImages($listing_no);
            $rooms =  $this->RoomModel->getRoomDetails($listing_no);


            for($i=0;$i<sizeof($rooms);$i++){
                $room_data = array();
                $id = $rooms[$i]->room_type_id;

                for($j=0;$j<sizeof($rooms_pics);$j++) {
                    if ($id == $rooms_pics[$j]->room_type_id) {
                        $room_data[] = $rooms_pics[$j];
                    }
                }


                $room = array('room_name'=> $rooms[$i]->room_name,'room_images'=>$room_data);

                $room_data = null;
                $data_rooms[] = $room;
            }

            $data = array('room' =>$data_rooms);
            // echo "<br>----------<br>";
            // print_r($data);
            $this->load->view('hotel/updateRoomImages',$data);
        }
        else{
            $_SESSION['error']= 'Time is up, please log in again for your own security.';
            redirect();
        }
    }

    //Update Images
    //LISTING
    public function updateImage()
    {
        $this->load->library('session');
        $id = $this->input->post('imageid');
        $loc = $this->input->post('imageloc');
        if (isset($_SESSION['hotelno']) && isset($_SESSION['login_hotel'])) {
            //	$listing_no = $_SESSION['hotelno'];
            $this->load->model('ListingsModel');
            $images = $this->ListingsModel->updateListingPics($id,$loc);
        } else {
            $_SESSION['error'] = 'Time is up, please log in again for your own security.';
            redirect();
        }
    }

    //ROOM
    function updateRoomImage(){
        $this->load->library('session');
        $id = $this->input->post('imageid');
        $loc = $this->input->post('imageloc');
        if (isset($_SESSION['hotelno']) && isset($_SESSION['login_hotel'])) {
            //	$listing_no = $_SESSION['hotelno'];
            $this->load->model('RoomModel');
            $images = $this->RoomModel->updateRoomPics($id,$loc);
        } else {
            $_SESSION['error'] = 'Time is up, please log in again for your own security.';
            redirect();
        }
    }

    //Delete Images
    //LISTING
    public function deleteImage()
    {

        $this->load->library('session');
        $id = $this->input->post('imageid');
        if (isset($_SESSION['hotelno']) && isset($_SESSION['login_hotel'])) {
            //	$listing_no = $_SESSION['hotelno'];
            $this->load->model('ListingsModel');
            $images = $this->ListingsModel->deleteListingPics($id);
        } else {
            $_SESSION['error'] = 'Time is up, please log in again for your own security.';
            redirect();
        }

    }

    //ROOM
    public function deleteRoomImage()
    {

        $this->load->library('session');
        $id = $this->input->post('imageid');
        if (isset($_SESSION['hotelno']) && isset($_SESSION['login_hotel'])) {
            //	$listing_no = $_SESSION['hotelno'];
            $this->load->model('RoomModel');
            $images = $this->RoomModel->deleteRoomPics($id);
        } else {
            $_SESSION['error'] = 'Time is up, please log in again for your own security.';
            redirect();
        }

    }


    //Add images.
    //LISTING
    public function addImage()
    {
        $this->load->library('session');
        $imagefiles = $this->input->post('imagefile');
        if (isset($_SESSION['hotelno']) && isset($_SESSION['login_hotel'])) {
            //	$listing_no = $_SESSION['hotelno'];
            $this->load->model('ListingsModel');
            $images = $this->ListingsModel->addListingPics($imagefiles);
        } else {
            $_SESSION['error'] = 'Time is up, please log in again for your own security.';
            redirect();
        }

    }

    //ROOM
    public function addRoomImages()
    {
        $this->load->library('session');
        $imagefiles = $this->input->post('imagefile');
        if (isset($_SESSION['hotelno']) && isset($_SESSION['login_hotel'])) {
            //	$listing_no = $_SESSION['hotelno'];
            $this->load->model('RoomModel');
            $images = $this->RoomModel->addRoomPics($imagefiles);
        } else {
            $_SESSION['error'] = 'Time is up, please log in again for your own security.';
            redirect();
        }

    }

    public function photoUpload(){
        // session_start();
            if (isset($_FILES["photo"]) && isset($_POST["id"])&& isset($_POST["loc"])&& isset($_POST["size"])) {
                $path =  explode("/",$_POST["loc"]);
                // $name ='photo' . date('Y-m-d-H-i-s') . '_' . uniqid() . '.jpg';
                $name = $path[sizeof($path)-1];
                $dir = $path[sizeof($path)-2];
                if ($_POST["size"] == 'big') {
                    $this->uploadSolo("photo",$dir,$name);
                }
                else if ($_POST["size"] == 'small') {
                    $name2 ='small_'.$name;
                    $this->uploadSolo("photo",$dir,$name2);
                }
            }
    }
    public function uploadSolo($id, $directory , $filename)
    {
        $target_dir = "backend/assets/images/listings/$directory/";
        if (!is_dir($target_dir)){
            mkdir($target_dir, 0777,true);
        }
        
        $imageFileType = 'png';// pathinfo($_FILES["photo"]["name"],PATHINFO_EXTENSION);
        $filename = $filename;  
        $target_file = $target_dir . basename($filename);   
        $uploadOk = 1;
        // print_r($_FILES)
        // log_message('debug', $target_file);
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES[$id]["tmp_name"]);
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
        // Check if file already exists
        // if (file_exists($target_file)) {
        //  $_SESSION['error_page5'] = "Sorry, file already exists."; 
        //  // $this->load->view('new_listing/C5_photos');
        //     // echo "Sorry, file already exists.";
        //     $uploadOk = 0;
        // }
        // Check file size
        if ($_FILES[$id]["size"] > 1000000) {
            $_SESSION['error_page5'] = "Sorry, your file is too large. Can you please upload photos which are smaler than 900KB, each."; 
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
            if (move_uploaded_file($_FILES[$id]["tmp_name"], $target_file)) {
                // $_SESSION['error_page5'] = "Sorry, file already exists."; 
                // $this->load->view('new_listing/C4_description');
                // $_SESSION['post'][$imageArray][] = $filename;
                return true;
                // echo "The file ". basename( $_FILES[$id]["name"][$i]). " has been uploaded.";
            } else {
                $_SESSION['error_page5'] = "Sorry, there was an unexpected error uploading your file."; 
                // $this->load->view('new_listing/C5_photos');
                 return false;
                // echo "Sorry, there was an error uploading your file.";
            }
        }
    }
}
