<?php

session_start();
if((isset($_SESSION['login_user'])) && !empty($_SESSION['login_user'])){
}
else{
    header ("location: ../../index.php");   
}
include '../../controller/DBCon.php';

$stmt1 = $db->prepare("SELECT * FROM booking,itemdetails where booking.booking_id=itemdetails.booking_id  and notifyAdmin=0");

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

