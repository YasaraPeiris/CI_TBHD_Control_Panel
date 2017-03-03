<?php

session_start();
if((isset($_SESSION['login_hotel'])) && !empty($_SESSION['login_hotel'])){
}
else{
    header ("location: ../../index.php");   
}
include '../../controller/DBCon.php';


$id = $_SESSION['id'];
if (!empty($_POST['check_list'])) {

    $count = 0;
    $stmt = $db->prepare("DELETE FROM  basicfacilitiestemp where hotel_id=?");
    $stmt->bind_param('d', $id);
    $stmt->execute();
    $stmt->close();
// Loop to store and display values of individual checked checkbox.
    foreach ($_POST['check_list'] as $selected) {

        $value = "'$selected'";
        $count++;

        $stmt1 = "INSERT INTO basicfacilitiestemp (hotel_id,facility_id,facility) VALUES ($id,$count,$value)";
        mysqli_query($db, $stmt1);
    }
}
if (!empty($_POST['check_roomlist'])) {
    $count = $_POST['roomtypemodal'];

    $stmt1 = $db->prepare("DELETE FROM  roomfacilitiestemp where hotel_id=? and room_type_id=? ");
    $stmt1->bind_param('dd', $id, $count);
    $stmt1->execute();
    $stmt1->close();
// Loop to store and display values of individual checked checkbox.
    foreach ($_POST['check_roomlist'] as $selected) {
        $value = "'$selected'";
        $stmt = $db->prepare("SELECT basic_facility_id FROM basicfacilities where hotel_id =? and basic_facility = ?");

        $stmt->bind_param("ds", $id, $selected);
        $stmt->execute();
        $result2 = $stmt->get_result();
        $s = 0;

        while ($row1 = $result2->fetch_assoc()) {
            $valb = $row1['basic_facility_id'];
            $valbNew = "'$valb'";


            $stmtN = "INSERT INTO roomfacilitiestemp (hotel_id,room_type_id,basic_facility_id) VALUES ($id,$count,$valbNew)";
            mysqli_query($db, $stmtN);
        }
    }
}


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

