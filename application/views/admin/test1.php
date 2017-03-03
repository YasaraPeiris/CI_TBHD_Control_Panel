<?php

session_start();
include '../../model/data_access/HotelDA.php';
include '../../controller/DBCon.php';
if (isset($_GET['register'])) {
    $destination = $_GET['register'];
   
   
    $stmtld = $db->prepare("SELECT hotel_name,hotel_id,Location FROM hotel where destination_id=? ");
    $stmtld->bind_param("d", $destination);
    $stmtld->execute();
    $resultld = $stmtld->get_result();

    $data = mysqli_fetch_all($resultld, MYSQLI_ASSOC);
echo json_encode($data);
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

