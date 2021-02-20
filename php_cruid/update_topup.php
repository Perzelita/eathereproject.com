<?php require_once('../php_front/authen.php'); ?>
<?php

$id = $_GET['request_deposit_id'];
print_r($id);


$sql ="SELECT * FROM `request_deposit` WHERE `request_deposit_id` = '".$id."' ORDER BY `request_deposit_id` DESC";
$result = $conn->query($sql)  or die($conn->error);
$row = $result->fetch_assoc();

print_r($row);


{
    $sql_balance="SELECT * FROM `member` WHERE `member_id` = '".$row['member_id']."'    ";
    $result = $conn->query($sql_balance)  or die($conn->error);
     $row_balance = $result->fetch_assoc();
     $balance = $row_balance["balance"];
 
     $row["telephone"];
     $row["balance_least"];
     $amount=$row["amount"];
     $balance += $amount;
     
     
  
  
}

if ($id = $_GET['request_deposit_id']){
    

$sql_rebalance=" UPDATE `member`
            SET `balance` = $balance
            WHERE member_id = '".$row['member_id']."';

";
$result = $conn->query($sql_rebalance)  or die($conn->error);
 include('./transection/transaction_topup_complete.php');
 include('./transection/activity_member_topup.php');
 include('./transection/total_summary_topup.php');
$sql_change_status_topup="UPDATE `request_deposit` 
                        SET `status` = '2' 
                        WHERE request_deposit_id = '".$row['request_deposit_id']."';
 ";
$result = $conn->query($sql_change_status_topup)  or die($conn->error);
if($result){
   echo '<script> alert  ("ยืนยันการเติมเงินสำเร็จ")</script>';
   echo '<script>  window.history.go(-1);</script>';

    header('Refresh:0;');
    
}

    else{
        echo '<script> alert ("...")</script>';
        header('Refresh:0;');
    };
}
?>