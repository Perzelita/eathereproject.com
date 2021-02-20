<?php require_once('../php_front/authen.php'); ?>
<?php 
if($type_kyc =="shipper"){
    if($id = $_GET['request_kyc_id']){
        
        print_r($id);
        $sql_check_phone = "SELECT * FROM `member` WHERE `telephone` = '".$row['telephone']."' ";
        $check_phone = $conn->query($sql_check_phone) or die($conn->error);
    
        print_r($check_phone);
        
    
        if(!$check_phone->num_rows){    
    $address1=$row['no_address1'];
    $address2=$row['no_address2'];
    $address = print_r($address1,$address2) ;
    $citizen_id_str9_13 = substr($row['citizen_id'],-4);
    $hashed = password_hash($citizen_id_str9_13, PASSWORD_DEFAULT);
    $sql ="INSERT INTO `member` (`status_member`, `user`, `telephone`, `password`, `email`, `no_address`,
     `district`, `amphoe`, `province`, `zipcode`, `latitude`, `longitude`, `name`, `surname`, `age`, `citizen_id`,
      `birthday`,  `pic_profile`, `pic_ctizen_id`,
        `pic_acc`, `pic_verify`,
        `venchle_id`,`venchle_type`, `venchle_brand`, `venchle_series`, `venchle_propoties`, `pic_booking_driver`,
        `created`, `updated`, `balance`, `last_login`) 
       VALUES ('".$row['type_kyc']."', '".$row['user']."', '".$row['telephone']."', '$hashed', '".$row['email']."',
       '$address',
        '".$row['district']."', '".$row['amphoe']."', '".$row['province']."', '".$row['zipcode']."',
         '".$row['latitude']."','".$row['longitude']."',
         '".$row['name']."', '".$row['surname']."', '".$row['age']."', '".$row['citizen_id']."','".$row['birthday']."',
        '".$row['pic_profile']."',
          '".$row['pic_ctizen_id']."',
          '".$row['pic_acc']."', '".$row['pic_verify']."',
          '".$row['venchle_id']."',
          '".$row['venchle_type']."','".$row['venchle_brand']."',
         '".$row['venchle_series']."', '".$row['venchle_propoties']."',
          '".$row['pic_booking_driver']."',
           '".$row['timestamp']."','".date("Y-m-d H:i")."',
           '0', '".date("Y-m-d H:i")."');
    ";
    
    $result = $conn->query($sql)  or die($conn->error);
    
    $sql_read_member_id="SELECT * FROM `member` WHERE `status_member` = 'shipper' ";
    $result_read_member_id = $conn->query($sql_read_member_id)  or die($conn->error);
    $row_sql_read_member_id = $result_read_member_id->fetch_assoc();
    
    $sql2="INSERT INTO `shipper` ( `member_id`)
    
     VALUES ( '".$row_sql_read_member_id['member_id']."');"; 
    
    $result2 = $conn->query($sql2)  or die($conn->error)  ;
    
       
    include ('./kyc_accept.php');

    
    
    
        if($result){
            echo '<script> alert  ("Success")</script>';
            echo '<script>  window.history.go(-1);</script>';
            header('Refresh:0;');
            
        }
        else
            {
           echo '<script> alert ("...")</script>';
           header('Refresh:0;');
            }
    
        }
        else{}
    
    }
    else {
        echo '<script> alert ("หมายเลขนี้ได้ถูกใช้ไปแล้ว")</script>';
        echo '<script>  window.history.go(-1);</script>';
        header('Refresh:0;');
         }
      
    }

?>
