<?php require_once('../php_front/authen.php'); ?>
<?php

$id = $_GET['request_deposit_id'];
print_r($id);


$sql ="SELECT * FROM `request_deposit` WHERE `request_deposit_id` = '".$id."' ORDER BY `request_deposit_id` DESC";
$result = $conn->query($sql)  or die($conn->error);
$row = $result->fetch_assoc();

print_r($row);



if ($id = $_GET['request_deposit_id']){
    


 include('./transection/transaction_topup_decline.php');
 include('./transection/activity_member_topup_decline.php');
$sql_change_status_topup="UPDATE `request_deposit` 
                        SET `status` = '3' 
                        WHERE request_deposit_id = '".$row['request_deposit_id']."';
 ";
$result = $conn->query($sql_change_status_topup)  or die($conn->error);
if($result){
   echo '<script> alert  ("ปฏิเสธการเติมเงินสำเร็จ")</script>';
   echo '<script>  window.history.go(-1);</script>';

    header('Refresh:0;');
    
}

    else{
        echo '<script> alert ("...")</script>';
        header('Refresh:0;');
    };
}
?>