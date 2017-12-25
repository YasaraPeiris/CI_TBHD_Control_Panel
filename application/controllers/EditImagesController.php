<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EditImagesController extends CI_Controller {

	public function getImages(){
		$this->load->library('session');
		if (isset($_SESSION['hotelno']) && isset($_SESSION['login_hotel'])) {
			$listing_no = $_SESSION['hotelno'];
			$this->load->model('ListingsModel');
			$images =  $this->ListingsModel->getListingPics($listing_no);
			$data= array('images'=> $images );
            print_r($data);
			$this->load->view('hotel/updateMainImages',$data);
		}
		else{
			$_SESSION['error']= 'Time is up, please log in again for your own security.';
			redirect();
		}

	}

	public function deleteImage(){
    		$this->load->library('session');
    		$id = $this->input->post('imageid');
    		if (isset($_SESSION['hotelno']) && isset($_SESSION['login_hotel'])) {
    		//	$listing_no = $_SESSION['hotelno'];
    			$this->load->model('ListingsModel');
    			$images =  $this->ListingsModel->deleteListingPics($id);
    			}
    			else{
                			$_SESSION['error']= 'Time is up, please log in again for your own security.';
                			redirect();
                		}

    	}

    	public function addImage(){
            		$this->load->library('session');
            		$imagefiles = $this->input->post('imagefile');
            		if (isset($_SESSION['hotelno']) && isset($_SESSION['login_hotel'])) {
            		//	$listing_no = $_SESSION['hotelno'];
            			$this->load->model('ListingsModel');
            			$images =  $this->ListingsModel->addListingPics($imagefiles);
            			}
            			else{
                        			$_SESSION['error']= 'Time is up, please log in again for your own security.';
                        			redirect();
                        		}

            	}
}
