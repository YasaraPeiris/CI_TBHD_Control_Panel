<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DateController extends CI_Controller {
	public function setHotelPageDate()
	{
		$this->load->library('session');
		$checkin=$this->input->post('checkin');
		$checkout=$this->input->post('checkout');
		$_SESSION['checkin'] = $checkin;
		$_SESSION['checkout'] = $checkout;

	$return =  array('status'=>'success');
	$this->output->set_content_type('application/json')->set_output(json_encode( $return));
	return; 
	}
}