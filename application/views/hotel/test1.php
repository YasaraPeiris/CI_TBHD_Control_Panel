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
 $stmt1 = $db->prepare("SELECT DISTINCT basic_facility  from basicfacilities where basic_facility_id in (SELECT basic_facility_id FROM roomfacilities where room_type_id =? AND hotel_id = ?) AND hotel_id=?");
        $stmt1->bind_param("sss", $y, $id, $id);
        $stmt1->execute();
        $result2 = $stmt1->get_result();
       $data = mysqli_fetch_all($result2,MYSQLI_ASSOC);
echo json_encode($data);
