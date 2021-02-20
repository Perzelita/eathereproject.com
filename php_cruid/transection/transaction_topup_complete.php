<?php
date_default_timezone_set("Asia/Bangkok");

$date=date('d-m-Y H:i:s');
$description_topup = "เติมเงินเป็นที่เรียบร้อย";

//TOPUP
$sql_tran_topup="INSERT INTO `transcription` (`date`, `description`, `deposit`, `change`, `balance`, `note`)
    
VALUES (
    '$date',
    '$description_topup',
    '"."+".$row['amount']."',
    '-',
    '$balance',     
 'Completed' );";
        $result = $conn->query($sql_tran_topup)  or die($conn->error);
if($result){
}

else{
  
}

?>