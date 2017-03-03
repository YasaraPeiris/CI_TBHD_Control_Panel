<?php
session_start();
if((isset($_SESSION['login_hotel'])) && !empty($_SESSION['login_hotel'])){
}
else{
    header ("location: ../../index.php");   
}
include '../../controller/DBCon.php';

$id = $_SESSION['id'];

$hotel = $_SESSION['login_hotel'];
$hotelNew = "'$hotel'";
$hotelNew = "Mountwaves Hotel";
$stmt1 = $db->prepare("SELECT * FROM booking,itemdetails where booking.booking_id=itemdetails.booking_id and hotel_form=? and notify=0");
$stmt1->bind_param("s", $hotelNew);
$stmt1->execute();
$rows = array();
$result2 = $stmt1->get_result();
$count = 0;
while ($row = mysqli_fetch_assoc($result2)) {
    $row = array_filter($row);
    if (!empty($row)) {
        $rows[] = $row;
    }
}
print_r(json_encode($rows));