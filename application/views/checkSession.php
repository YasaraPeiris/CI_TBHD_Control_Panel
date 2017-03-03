<?php 
if((isset($_SESSION['login_user'])) && !empty($_SESSION['login_user'])){
   

}
else{
  echo"vhhh";
    header ("location: ../../index.php");   
}
?>