<?php require_once("../php_front/authen.php");

if (isset($_GET['add_submit'])){
    $add_menu="INSERT INTO menu (`partner_id_fk`,`avalable`,`menu_name`,`unit`,`price`) 
    
    VALUES(
      '".$_SESSION['member_id']."',
      '".$_GET['avalable']."',
      '".$_GET['menu']."',
      '1',
      '".$_GET['price']."'
      
   
    );";
    $added = $conn->query($add_menu)  or die($conn->error);
    if ($added){
     $_SESSION['avalable'] =$_GET['avalable'];
     $_SESSION['menu_name'] =$_GET['menu'];
     $_SESSION['price'] = $_GET['price'];
  
header ('location: ../bn_partner/menu_list.php');   
    }
   }
   ?>





