<?php include_once('../php_cruid/connect_DB.php');?>
<?php



if(isset($_POST['check_telephone_num'])){
  
   
    $sql_check_phone = "SELECT `telephone`  FROM `member` WHERE `telephone` = '".$_POST['telephone']."' ";
    $check_phone = $conn->query($sql_check_phone) or die($conn->error);
    
    if(!$check_phone->num_rows){ 

       echo '<script> window.alert  ("สามารถใช้หมายเลขเบอร์โทรศัพท์นี้ได้")</script>';
        echo '<script>  window.history.go(-1);</script>';
    }
    

else{

    echo '<script> window.alert  ("ไม่สามารถใช้หมายเลขเบอร์โทรศัพท์ได้")</script>';
    echo '<script>  window.history.go(-1);</script>';
}  



}

if(isset($_POST['check_citizen_id'])){
    $sql_check_phone = "SELECT `citizen_id` FROM `member` WHERE `citizen_id` = '".$_POST['citizen_id']."' ";
    $check_phone = $conn->query($sql_check_phone) or die($conn->error);
    if(!$check_phone->num_rows){ 
        echo '<script> window.alert  ("สามารถใช้หมายเลขบัตรประชาชนนี้นี้ได้")</script>';
        echo '<script>  window.history.go(-1);</script>';
    }
    
    else{

        echo '<script> window.alert  ("ไม่สามารถใช้หมายเลขบัตรประชาชนนี้ได้")</script>';
        echo '<script>  window.history.go(-1);</script>';
    }
}


?>