<?php

session_start();
if((isset($_SESSION['idNew'])) && !empty($_SESSION['idNew'])){
}
else{
    header ("location: ../../index.php");   
}
include '../../controller/DBCon.php';



if (isset($_GET['value'])) {

    $stmt1 = $db->prepare("SELECT * FROM basicfacilitiestemp,hotel where hotel.hotel_id=basicfacilitiestemp.hotel_id and notify=0 ");

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
}

if (isset($_GET['inquiry'])) {

    $stmt1 = $db->prepare("SELECT * FROM contact where notify=0");

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
}
if (isset($_POST['emailto'])) {
    if(isset($_POST['Id'])){
  $descl_id = $_POST['Id'];
      $stmt3 = "UPDATE contact SET notify=1 WHERE contact_id=$descl_id";
    $stmt3 = $db->prepare($stmt3);
    
    
    $stmt3->execute();
    if ($stmt3->errno) {
        
    } else {
        
        $stmt3->close();
    }
    }
$to      = $_POST['emailto'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$headers = 'From:wenuka@gmail.com' . "\r\n" .
    'Reply-To: yasarapeiris.13@cse.mrt.ac.lk' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

//mail($to, $subject, $message, $headers);

    
}
if ((isset($_POST['bookingidset']))&& (isset($_POST['itemidset']))){
    $booking_id = $_POST['bookingidset'];
     $item_id = $_POST['itemidset'];
     $stmt2 = "UPDATE itemdetails SET notifyAdmin=1 WHERE booking_id=? and item_id=?";
$stmt2 = $db->prepare($stmt2);
$stmt2->bind_param('dd', $booking_id, $item_id);
$stmt2->execute();
if ($stmt2->errno) {
    
} else {
    $stmt2->close();
}
}


