<?php
session_start();
if((isset($_SESSION['login_user'])) && !empty($_SESSION['login_user'])){
}
else{
    header ("location: ../../index.php");   
}
include '../../controller/DBCon.php';
if (isset($_POST['hotelU'])) {
    $descl_id = $_POST['hotelU'];

    $stmt1 = $db->prepare("SELECT * FROM hoteldestemp where desc_id=?");
    $stmt1->bind_param("d", $descl_id);
    $stmt1->execute();
    $rows = array();
    $result2 = $stmt1->get_result();
    $row1 = $result2->fetch_assoc();
    $desc = $row1['description'];
    $hotelid = $row1['hotel_id'];

    $stmt2 = "UPDATE hotel SET hotel_desc=? WHERE hotel_id=$hotelid";
    $stmt2 = $db->prepare($stmt2);
    $stmt2->bind_param('s', $desc);

    $stmt2->execute();
    if ($stmt2->errno) {
        
    } else {
        $stmt2->close();
    }
    $stmt3 = "UPDATE hoteldestemp SET notify=1 WHERE desc_id=$descl_id";
    $stmt3 = $db->prepare($stmt3);


    $stmt3->execute();
    if ($stmt3->errno) {
        
    } else {
        $stmt3->close();
    }
}
if (isset($_POST['hotelCheck'])) {
    $id = $_POST['hotelCheck'];
    $stmt = $db->prepare("DELETE FROM  basicfacilities where hotel_id=?");
    $stmt->bind_param('d', $id);
    $stmt->execute();
    $stmt->close();


    $stmtnew = $db->prepare("SELECT * FROM basicfacilitiestemp where hotel_id=? and checkDeatils=1");
    $stmtnew->bind_param("d", $id);
    $stmtnew->execute();
    $result1 = $stmtnew->get_result();
    $num = 0;
    $countb = 1;
    $counta = 0;
    while ($row = $result1->fetch_assoc()) {
        $num++;
        $value = $row['facility'];
        
        $value1 = "'$value'";
        
            $stmt1 = "INSERT INTO basicfacilities (hotel_id,basic_facility_id,basic_facility,checkDetails) VALUES ($id,$num,$value1,$countb)";
            mysqli_query($db, $stmt1);
        
    }
 $stmt3 = "UPDATE basicfacilitiestemp SET notify=1 WHERE hotel_id=$id";
    $stmt3 = $db->prepare($stmt3);
    $stmt3->execute();
    if ($stmt3->errno) {
    } else {
        $stmt3->close();
    }
}