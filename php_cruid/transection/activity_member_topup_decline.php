<?php
date_default_timezone_set("Asia/Bangkok");

$date=date('d-m-Y H:i:s');
$description_topup = "ปฏิเสธการเติมเงิน";
$sql_read="SELECT * FROM `member` ORDER BY `member`.`balance` DESC LIMIT 1";
$result = $conn->query($sql_read)  or die($conn->error);
$row_read = $result->fetch_assoc();
$balance=$row_read['balance'];
//TOPUP
$activity_topup="INSERT INTO `history` (`member_id`, `date`, `description`, `deposit`, `change`, `balance` )
    
VALUES (
    '".$row['member_id']."',
    '$date',
    '$description_topup',
    '0',
    '0',
    '$balance'    
  );";
        $result = $conn->query($activity_topup)  or die($conn->error);
if($result){
}

else{
  
}

?>