<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HotelController extends CI_Controller {

	public function setConfirm(){

		$booking_id=$this->input->post('bookingid');
		$this->load->model('ListingsModel');
		$this->ListingsModel->setConfirm($booking_id);

	}

	public function setIgnore(){

		$booking_id=$this->input->post('bookingid');
		$this->load->model('ListingsModel');
		$this->ListingsModel->setIgnore($booking_id);

	}

	
}