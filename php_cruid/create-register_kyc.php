<?php require_once('../php_front/authen.php'); ?>


<?php 
$id = $_GET['request_kyc_id'];
print_r($id);
$sql ="SELECT * FROM `request_kyc` WHERE `request_kyc_id` = '".$id."' ORDER BY `status_verify_id` DESC
";
$result = $conn->query($sql)  or die($conn->error);
$row = $result->fetch_assoc();

print_r($row);

$type_kyc = $row['type_kyc'];

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
 `district`, `amphoe`, `province`, `zipcode`, `latitude`, `longitude`, `name`, `surname`,  `citizen_id`,
  `birthday`, `partner_name`, `food_type`, `open_order`, `close_order`, `bio`, `pic_profile`, `pic_ctizen_id`,
   `pic_cover`, `pic_acc`, `pic_verify`, `created`, `updated`, `balance`, `last_login`) 
   VALUES ('".$row['type_kyc']."', '".$row['user']."', '".$row['telephone']."', '$hashed', '".$row['email']."',
   '$address',
    '".$row['district']."', '".$row['amphoe']."', '".$row['province']."', '".$row['zipcode']."',
     '".$row['latitude']."','".$row['longitude']."',
     '".$row['name']."', '".$row['surname']."',  '".$row['citizen_id']."','".$row['birthday']."',
     '".$row['partner_name']."','".$row['food_type']."',
     '".$row['open_order']."', '".$row['close_order']."',
      '".$row['bio']."','".$row['pic_profile']."',
      '".$row['pic_ctizen_id']."', '".$row['pic_cover']."',
      '".$row['pic_acc']."', '".$row['pic_verify']."',
       '".$row['timestamp']."','".date("Y-m-d H:i")."',
       '0', '".date("Y-m-d H:i")."');
";

$result = $conn->query($sql)  or die($conn->error);

$sql_read_member_id="SELECT * FROM `member` WHERE `status_member` = 'partner' ORDER BY `member_id` DESC limit 1
";
$result_read_member_id = $conn->query($sql_read_member_id)  or die($conn->error);
$row_sql_read_member_id = $result_read_member_id->fetch_assoc();


$sql2="INSERT INTO `menu` ( `partner_id_fk`)

 VALUES ( '".$row_sql_read_member_id['member_id']."');"; 

$result2 = $conn->query($sql2)  or die($conn->error)  ;

$sql3="INSERT INTO `partner_avalable` ( `partner_id_fk`, `status`)

 VALUES ( '".$row_sql_read_member_id['member_id']."', 'close');"; 

$result3 = $conn->query($sql3)  or die($conn->error)  ;


$sql4="INSERT INTO `total_summary_partner`   (`partner_id`)
    
VALUES ( '".$row_sql_read_member_id['member_id']."');";

$result4 = $conn->query($sql4) or die ($conn->error);

//include ('./SMS/sms_api_request_partner.php');
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
else {
    echo '<script> alert ("หมายเลขโทรศัพท์นี้ได้ถูกใช้ไปแล้ว")</script>';
    echo '<script>  window.history.go(-1);</script>';
    header('Refresh:0;');
     }
  
}
 


?>