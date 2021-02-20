<?php require_once('../php_front/authen.php'); ?>
<?php

$id = $_GET['request_kyc_id'];
print_r($id);


$sql ="SELECT * FROM `request_kyc` WHERE `request_kyc_id` = '".$id."' ORDER BY `request_kyc_id`  DESC
";
$result = $conn->query($sql)  or die($conn->error);
$row = $result->fetch_assoc();

print_r($row);



if ($id = $_GET['request_kyc_id']){
  
        $sql_updated=" UPDATE `request_kyc`
        SET `status_verify_id` = '2'
        WHERE request_kyc_id = '".$row['request_kyc_id']."';";
    
        $result_updated = $conn->query($sql_updated)  or die($conn->error)  ;
    if($result_updated){
        echo '<script> alert  ("ปฏิเสธคำขอร่วมสำเร็จ")</script>';
        echo '<script>  window.history.go(-1);</script>';
     }
    else{  };
    }
    
    
    
    
    ?>

