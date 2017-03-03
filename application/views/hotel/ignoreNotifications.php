<?php
include '../../controller/DBCon.php';
session_start();
if((isset($_SESSION['login_hotel'])) && !empty($_SESSION['login_hotel'])){
}
else{
    header ("location: ../../index.php");   
}


if ((isset($_POST['bookingidset'])) &&(isset($_POST['itemidset']))){
    $booking_id = $_POST['bookingidset'];
    $item_id = $_POST['itemidset'];
    $stmt2 = "UPDATE itemdetails SET notify=2 WHERE booking_id=? and item_id=?";
$stmt2 = $db->prepare($stmt2);
$stmt2->bind_param('dd', $booking_id, $item_id);
$stmt2->execute();
if ($stmt2->errno) {
    
} else {
    $stmt2->close();
}
}


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

