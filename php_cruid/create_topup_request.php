<?php require_once('../php_front/authen.php'); ?>
<?php

print_r($_POST);
if(isset($_POST['submit'])){
    $evidence_img = $_FILES['evidence_tran']['name'];
    $temp_name = $_FILES['evidence_tran']['tmp_name'];
    
include("../php_cruid/line_notify/line_notify_topup.php");
include("../php_cruid/transection/transection_topup.php");


    move_uploaded_file($temp_name,"../pic/evidence_tran/$evidence_img");  	
                             
        $sql ="INSERT INTO `request_deposit` (`member_id`,`telephone`,`balance_least`,`amount`,`status`,`namebank`,`evidence_tran`,`date`,`time`)
    
        VALUES (
            '".$_SESSION['member_id']."',
            '".$_SESSION['telephone']."',
            '".$_SESSION['balance']."',
            '".$_POST['amount']."',
            '1',
            '".$_POST['namebank']."',
         '$evidence_img',        
         '".$_POST['date']."',
         '".$_POST['time']."'





            );";
                $result = $conn->query($sql)  or die($conn->error);
if($result){
    echo '<script> alert  ("ทำการยืนยันการเติมเงินสำเร็จ ยอดเงินจะเข้าระบบภายใน 45-60นาที")</script>';
    echo '<script>  window.history.go(-1);</script>';
    header('Refresh:0;');
    
}

    else{
        echo '<script> alert ("...")</script>';
        header('Refresh:0;');
    };
}

?>