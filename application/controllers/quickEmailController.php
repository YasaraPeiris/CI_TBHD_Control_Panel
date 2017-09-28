<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class quickEmailController extends CI_Controller
{

    public function email()
    {
            $this->load->view('hotel/quickEmailHotel');
    }
}