<?php require_once('../php_front/authen.php'); ?>
<?php

$id = $_GET['request_withdraw_id'];
print_r($id);


$sql ="SELECT * FROM `request_withdraw` WHERE `request_withdraw_id` = '".$id."' ORDER BY `request_withdraw_id` DESC";
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
     $balance -= $amount;
     
     
  
  
}

if ($id = $_GET['request_withdraw_id']){
    

$sql_rebalance=" UPDATE `member`
            SET `balance` = $balance
            WHERE member_id = '".$row['member_id']."';

";
$result = $conn->query($sql_rebalance)  or die($conn->error);

$sql_change_status_with_draw="UPDATE `request_withdraw` 
                        SET `status` = '2' 
                        WHERE request_withdraw_id = '".$row['request_withdraw_id']."';
 ";
$result_sql_change_status_with_draw = $conn->query($sql_change_status_with_draw)  or die($conn->error);


$date=date('d-m-Y H:i:s');
$description_withdraw = "ถอนเงิน";

//withdraw
$sql_tran_withdraw="INSERT INTO `transcription` (`date`, `description`, `deposit`, `change`, `balance`, `note`)
    
VALUES (
    '$date',
    '$description_withdraw',    
    '-',
    '"."-".$row['amount']."',
    '$balance',     
 'Completed' );";

        $result_sql_tran_withdraw = $conn->query($sql_tran_withdraw)  or die($conn->error);

        $activity_withdraw="INSERT INTO `history` (`member_id`, `date`, `description`, `deposit`, `change`, `balance` )
    
VALUES (
    '".$row['member_id']."',
    '$date',
    '$description_withdraw',    
    '-',
    '"."-".$row['amount']."',
    '$balance'    
  );";
        $result_activity_withdraw= $conn->query($activity_withdraw)  or die($conn->error);




if($result_sql_change_status_with_draw){
   echo '<script> alert  ("ยืนยันการถอนเงินสำเร็จ")</script>';
   echo '<script>  window.history.go(-1);</script>';

 

    header('Refresh:0;');

    
    
}

    else{
        echo '<script> alert ("...")</script>';
        header('Refresh:0;');
    };
}
?>