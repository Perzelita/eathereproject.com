<?php header("Content-type: application/javascript");?>
<?php
include_once ('../../../php_cruid/connect_DB.php');
$sql="SELECT status_verify_id FROM `request_kyc` WHERE `status_verify_id` = 0 ";
$sql1 ="SELECT status_verify_id FROM `request_kyc` WHERE `status_verify_id` = 1 ";
$sql2 ="SELECT status_verify_id FROM `request_kyc` WHERE `status_verify_id` = 2 ";

$result = $conn->query($sql)  or die($conn->error);
$result1 = $conn->query($sql1)  or die($conn->error);
$result2 = $conn->query($sql2)  or die($conn->error);

$count_wait =mysqli_num_rows($result) ;
$count_accept =mysqli_num_rows($result1) ;
$count_decline =mysqli_num_rows($result2) ;




?>




        export  function count_wait (){
 return   <?php echo json_encode ($count_wait) ?>;}
 export  function count_accept (){
 return    <?php echo json_encode ($count_accept) ?>;}
 export  function count_decline (){
 return     <?php echo json_encode ($count_decline) ?>;}
    


