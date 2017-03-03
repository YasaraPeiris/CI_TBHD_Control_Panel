<?php
session_start();
if((isset($_SESSION['login_user'])) && !empty($_SESSION['login_user'])){
}
else{
    header ("location: ../../index.php");   
}
include '../../controller/DBCon.php';
if (isset($_POST['check'])) {
    
    $descl_id = $_POST['check'];
    $stmt3 = "UPDATE hoteldestemp SET notify=1 WHERE desc_id=$descl_id";
    $stmt3 = $db->prepare($stmt3);


    $stmt3->execute();
    if ($stmt3->errno) {
        
    } else {
        $stmt3->close();
    }
}
if (isset($_POST['Id'])) {
    $descl_id = $_POST['Id'];
    $stmt3 = "UPDATE contact SET notify=1 WHERE contact_id=$descl_id";
    $stmt3 = $db->prepare($stmt3);
    $stmt3->execute();
    if ($stmt3->errno) {
        
    } else {

        $stmt3->close();
    }
}
if (isset($_POST['hotelCheck'])) {
    $id = $_POST['hotelCheck'];
    $stmt3 = "UPDATE basicfacilitiestemp SET notify=1 WHERE hotel_id=$id";
    $stmt3 = $db->prepare($stmt3);
    $stmt3->execute();
    if ($stmt3->errno) {
        
    } else {
        $stmt3->close();
    }
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

