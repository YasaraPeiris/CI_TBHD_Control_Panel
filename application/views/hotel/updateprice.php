<?php

session_start();
if((isset($_SESSION['login_hotel'])) && !empty($_SESSION['login_hotel'])){
}
else{
    header ("location: ../../index.php");   
}
include '../../controller/DBCon.php';
$id = $_SESSION['id'];
if (!empty($_POST['added_rate'])) {
    $roomType = $_POST['roomtypeid'];
    $col = $_POST["roomratemodal"];
    if ($col == 0) {
        $column = 'price_only_bed';
    } else if ($col == 1) {
        $column = 'price_bed_breakfast';
    }
    
    $price = $_POST["added_rate"];
     
    $stmt = $db->prepare("UPDATE roomtypes SET $column=? WHERE hotel_id=? and room_type_id=?");
    $stmt->bind_param('sii', $price, $id, $roomType);
    $stmt->execute();
}
