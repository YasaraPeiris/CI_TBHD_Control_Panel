<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Runner extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->library('reportico');
    }
    public function index()
    {
        $this->reportico->reportico_ajax_mode = true;
        $this->reportico->reportico_ajax_script_url = $_SERVER["SCRIPT_NAME"] . '/runner';
        $this->reportico->execute();
    }

}
?>
