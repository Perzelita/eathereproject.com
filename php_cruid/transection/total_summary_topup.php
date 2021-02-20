<?php
require_once('../php_front/authen.php');
// ทำsalary date ด้วย
//TOPUP
$sql_read="SELECT * FROM `total_summary` ORDER BY `total_summary`.`total_summary_id` DESC";
$result = $conn->query($sql_read)  or die($conn->error);
$row_read = $result->fetch_assoc();
$deposit=$row_read['deposit'];
$deposit += $balance;
$total_summary="INSERT INTO `total_summary` ( `total_summary`, `salary`, `salary_month`, `deposit`, `withdraw`  )
    
VALUES (
    '".$row_read['total_summary']."',
    '".$row_read['salary']."',
    '".$row_read['salary_month']."',
    '$deposit',
    '".$row_read['withdraw']."'
    
       
  );";
        $result = $conn->query($total_summary)  or die($conn->error);
if($result){
}

else{
  
}

?>