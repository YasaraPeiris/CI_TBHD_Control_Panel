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
            $images = $this->ListingsModel->addRoomPics($imagefiles);
        } else {
            $_SESSION['error'] = 'Time is up, please log in again for your own security.';
            redirect();
        }

    }
}
