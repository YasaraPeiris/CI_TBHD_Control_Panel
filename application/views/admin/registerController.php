<?php
session_start();
include '../../controller/DBCon.php';
if((isset($_POST['destination']))&&(isset($_POST['hotelmodal']))){
    
    $hotelid= $_POST['hotelmodal'];
    echo $hotelid;
    $user=$_POST['user'];
    $user1="'$user'";
    $pass1 = $_POST['pass1'];
    $pass="'$pass1'";
$stmt1 = "INSERT INTO login (username,password,hotel_no) VALUES ($user1,$pass,$hotelid)";
            mysqli_query($db, $stmt1);
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

