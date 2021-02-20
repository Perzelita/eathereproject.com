<?php
date_default_timezone_set("Asia/Bangkok");

$date=date('d-m-Y H:i:s');
$description_topup = "คำขอการเติมเงินเบอร์ ".$_SESSION['telephone'];

//TOPUP
$sql_tran_topup="INSERT INTO `transcription` (`date`, `description`, `deposit`, `change`, `balance`, `note`)
    
VALUES (
    '$date',
    '$description_topup',
    '".$_POST['amount']."',
    '-',
    '-',     
 'คำขอเติมเงินลูกค้า'





    );";
        $result = $conn->query($sql_tran_topup)  or die($conn->error);
if($result){
}

else{
  
}
//TOPUP



    
?>