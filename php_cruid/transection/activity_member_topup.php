<?php
date_default_timezone_set("Asia/Bangkok");

$date=date('d-m-Y H:i:s');
$description_topup = "เติมเงิน";

//TOPUP
$activity_topup="INSERT INTO `history` (`member_id`, `date`, `description`, `deposit`, `change`, `balance` )
    
VALUES (
    '".$row['member_id']."',
    '$date',
    '$description_topup',
    '".$row['amount']."',
    '-',
    '$balance'    
  );";
        $result = $conn->query($activity_topup)  or die($conn->error);
if($result){
}

else{
  
}

?>