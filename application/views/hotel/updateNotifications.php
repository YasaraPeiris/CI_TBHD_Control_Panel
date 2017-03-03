<?php

include '../../controller/DBCon.php';
session_start();
if((isset($_SESSION['login_hotel'])) && !empty($_SESSION['login_hotel'])){
}
else{
    header ("location: ../../index.php");   
}
if (isset($_POST['bookingidset'])) {
    $booking_id = $_POST['bookingidset'];
}
if (isset($_POST['itemidset'])) {
    $item_id = $_POST['itemidset'];
}

$stmt2 = "UPDATE itemdetails SET notify=1 WHERE booking_id=? and item_id=?";
$stmt2 = $db->prepare($stmt2);
$stmt2->bind_param('dd', $booking_id, $item_id);
$stmt2->execute();
if ($stmt2->errno) {
    
} else {
    $stmt2->close();
}
$id = $_SESSION['id'];
$name = $_SESSION['login_hotel'];
$content = "Booking Id - " + $booking_id + "  Item_id - " + $item_id;
$r = 'wuka@gmail.com';

function send_Mail($id, $name, $content, $r) {
    $to = "yasarapeiris.13@cse.mrt.ac.lk";
    $subject = "Order Confirmation by hotel id - " + $id + " hotel name - " + $name;
    $txt = $content;
    mail($to, $subject, $txt);
    //  mail("yasarapeiris.13@cse.mrt.ac.lk", $subject, $content, $from);
}

//send_Mail($id, $name, $content, $r);
