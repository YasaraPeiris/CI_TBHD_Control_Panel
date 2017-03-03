<?php
session_start();
if((isset($_SESSION['login_hotel'])) && !empty($_SESSION['login_hotel'])){
}
else{
    header ("location: ../../index.php");   
}
include '../../controller/DBCon.php';
$y=$_GET['roomType'];
$id=$_SESSION['id'];
$stmt2 = $db->prepare("SELECT * FROM roomtypes  where hotel_id=? and room_type_id=?");

$stmt2->bind_param("ds",  $id, $y); //$_REQUEST['state']
$stmt2->execute();
$result2 = $stmt2->get_result();
$data = mysqli_fetch_all($result2,MYSQLI_ASSOC);
echo json_encode($data);