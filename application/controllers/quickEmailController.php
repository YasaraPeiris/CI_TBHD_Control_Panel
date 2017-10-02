<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class QuickEmailController extends CI_Controller
{

    public function email()
    {
    	if (isset($_SESSION['hotelno']) && isset($_SESSION['login_hotel'])) {

            $this->load->view('hotel/quickEmailHotel');
        }
		else{
			$_SESSION['error']= 'Time is up, please log in again for your own security.';
			redirect();
		}
    }
}