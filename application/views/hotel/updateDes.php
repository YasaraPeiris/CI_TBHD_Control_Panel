<?php

session_start();
if((isset($_SESSION['login_hotel'])) && !empty($_SESSION['login_hotel'])){
}
else{
    header ("location: ../../index.php");   
}
include '../../controller/DBCon.php';
if (isset($_POST['editor1'])) {
    $id = $_SESSION['id'];
    $hotel = $_SESSION['login_hotel'];
    $hotelNew = "'$hotel'";
    $value = $_POST['editor1'];
    $val1 = trim($value);

    $val = "'$val1'";
    $stmt = $db->prepare("DELETE FROM  hoteldestemp where hotel_id=?");
$stmt->bind_param('d', $id);
$stmt->execute(); 
$stmt->close();

    $stmt1 = "INSERT INTO hoteldestemp (hotel_id,description,hotel_name) VALUES ($id,$val,$hotelNew)";
    mysqli_query($db, $stmt1);
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

