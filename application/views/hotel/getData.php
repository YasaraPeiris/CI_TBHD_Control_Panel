<?php

session_start();
if((isset($_SESSION['login_user'])) && !empty($_SESSION['login_user'])){
}
else{
    header ("location: ../../index.php");   
}
include '../../controller/DBCon.php';
if(isset($_GET['visitors'])){

$stmt2 = $db->prepare("SELECT count FROM hit_counter where id=1;");

$stmt2->execute();
$result2 = $stmt2->get_result();
$data = mysqli_fetch_all($result2,MYSQLI_ASSOC);
echo json_encode($data);
}
if(isset($_GET['orders'])){
$hotel = $_SESSION['login_hotel'];
$hotelNew = "'$hotel'";
$hotelNew = "Mountwaves Hotel";
$stmt2 = $db->prepare( "SELECT COUNT(item_id) as items FROM booking,itemdetails where booking.booking_id=itemdetails.booking_id  and hotel_form=? and notify=0");
$stmt2->bind_param("s", $hotelNew);
$stmt2->execute();
$result2 = $stmt2->get_result();
$data = mysqli_fetch_all($result2,MYSQLI_ASSOC);
echo json_encode($data);
}

if(isset($_GET['inquiries'])){

    
$stmt2 = $db->prepare("SELECT COUNT(contact_id) as contacts FROM contact where notify=0");

$stmt2->execute();
$result2 = $stmt2->get_result();
$data = mysqli_fetch_all($result2,MYSQLI_ASSOC);
echo json_encode($data);
}
if(isset($_GET['notifications'])){
    
$stmt2 = $db->prepare("SELECT COUNT(change_id) as updates FROM basicfacilitiestemp where notify=0");

$stmt2->execute();
$result2 = $stmt2->get_result();
$data = mysqli_fetch_all($result2,MYSQLI_ASSOC);
echo json_encode($data);
}