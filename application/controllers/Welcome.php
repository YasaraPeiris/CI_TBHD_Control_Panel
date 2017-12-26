<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('index');
	}
	public function chart()
    {
        $this->load->view('hotel/charts');
    }
    public function calender()
    {
        $this->load->view('hotel/viewCalender');
    }
	// public function createindex()
	// {

	// 	$this->load->model('AccountModel');
	// 	$pics =  $this->AccountModel->createindex();
	// 	foreach ($pics as $key => $value) {
	// 		$length = strlen($value->image_path);
	// 		// echo $value->image_path[$length-5];
	// 		if ($value->image_path[$length-5] < 4){
	// 			$value->is_main = true;
	// 		}
	// 		echo $value->listing_pic_id ." - ";
	// 		print_r($value);
	// 		echo "<br><br>";
	// 		$this->AccountModel->addindex($value, $value->listing_pic_id);
	// 	}
	// 	// print_r($pics);
	// 	// $this->load->view('index');
	// }
}
