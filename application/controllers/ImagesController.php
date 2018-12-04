<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ImagesController extends CI_Controller
{
    public function photoUploadRoom(){
        session_start();
        if (isset($_SESSION['post']['listing_img_dir'])&&isset($_FILES["photo"]) && isset($_SESSION['post']['roomCount'])){
                $name ='room_'.$_SESSION['post']['roomCount'];  //'room_'.$roomCount.'_bathroom' $roomCount = $_SESSION['post']['roomCount'];
                $dir = $_SESSION['post']['listing_img_dir'];
       
                $this->uploadSolo("photo",$dir,$name,1,'room_images');
        }
    }
    public function photoUploadBathroom(){
        session_start();
        if (isset($_SESSION['post']['listing_img_dir']) &&isset($_FILES["photo"]) && isset($_SESSION['post']['roomCount'])){
                $name ='room_'.$_SESSION['post']['roomCount'].'_other';
                $dir = $_SESSION['post']['listing_img_dir'];
       
                $this->uploadSolo("photo",$dir,$name,$_SESSION['post']['imageNumBathroom'],'bathroom_images');
                $_SESSION['post']['imageNumBathroom'] = $_SESSION['post']['imageNumBathroom'] +1;
        }
    }
    public function startProcessRoomIm(){
        session_start();
        $_SESSION['post']['images'] = array();
        $_SESSION['post']['room_images'] = array();
        $_SESSION['post']['imageNumRoom'] = 1;      
    }
    public function startProcessBathroomIm(){
        session_start();
        $_SESSION['post']['images'] = array();
        $_SESSION['post']['bathroom_images'] = array();
        $_SESSION['post']['imageNumBathroom'] = 1;      
    }
    public function uploadSolo($id, $directory , $filename,$i,$imageArray)
    {
        $target_dir = "backend/assets/images/listings/$directory/";
        if (!is_dir($target_dir)){
            mkdir($target_dir, 0777,true);
        }
        
        $imageFileType = 'png';// pathinfo($_FILES["photo"]["name"],PATHINFO_EXTENSION);
        $filename = $filename."_".$i.".".$imageFileType;  
        $target_file = $target_dir . basename($filename);   
        $uploadOk = 1;
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES[$id]["tmp_name"]);
            if($check !== false) {
                // echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                $_SESSION['error_page5'] = "File is not an image."; 
                // echo "File is not an image.";
                $uploadOk = 0;
            }
        }
        // Check file size
        if ($_FILES[$id]["size"] > 1000000) {
            $_SESSION['error_page5'] = "Sorry, your file is too large. Can you please upload photos which are smaler than 900KB, each."; 
            // echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            $_SESSION['error_page5'] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed."; 
            // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            return false;
        // if everything is ok, try to upload file
        } 
        else {
            if (move_uploaded_file($_FILES[$id]["tmp_name"], $target_file)) {
                $_SESSION['post'][$imageArray][] = $filename;
                return true;
            } else {
                $_SESSION['error_page5'] = "Sorry, there was an unexpected error uploading your file."; 
                 return false;
            }
        }
    }   
}
