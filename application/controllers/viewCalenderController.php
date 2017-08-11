<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class viewCalenderController extends CI_Controller {
    public function calender()
    {

        $this->load->library('session');
        $this->load->model('CalenderModel');
        $listing_no = $_SESSION['hotelno'];

        $roomType=$this->CalenderModel->getRoomTypes($listing_no);
        $bookingStatus=$this->CalenderModel->getBookingStatus();
        $room=$this->CalenderModel->getRooms($listing_no);
        $roomStatus=$this->CalenderModel->getRoomStatus();
        $collections =  array('roomType'=>$roomType,'roomStatus'=>$roomStatus,'bookingStatus'=>$bookingStatus,'room'=>$room);
        $data=$this->CalenderModel->getData($listing_no);
        $return =  array('data'=>$data,'collections'=>$collections);
//        $this->output->set_content_type('application/json')->set_output(json_encode( $return));
        $data_array= json_encode( $return);
        $return_array =  array('data_array'=>$data_array,'df'=>"fdfd");
      //  return;
       $this->load->view('hotel/viewCalender',$return_array);
     //   $this->load->view('hotel/viewCalender');
    }
    public function viewData()
    {
    }
}