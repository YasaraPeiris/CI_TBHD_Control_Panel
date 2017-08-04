<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class viewCalenderController extends CI_Controller {
    public function index()
    {
        // echo "string";
        $this->load->library('session');
        $this->load->model('RoomModel');
        $listing_no = $_SESSION['hotelno'];
        $data=$this->RoomModel->getRoomDetails($listing_no);
        $return =  array('status'=>'success','details'=>$data);
        $this->output->set_content_type('application/json')->set_output(json_encode( $return));
        return;
    }
    public function viewData()
    {
        $this->load->view('hotel/data');
    }
}