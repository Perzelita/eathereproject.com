
<?php
require_once('../php_front/authen.php');

if(isset($_POST['accept'])){
    $early= (int)$_SESSION['balance'] + (int)$_POST['early']; 
    $sql_accept="UPDATE `order` SET `status_order`='2' WHERE `order_id` ='".$_POST['order_id']."' ";
     $sql_accept2="UPDATE member SET balance = '".$early."' WHERE member_id='".$_SESSION['member_id']."'; ";
    
$result_accept=$conn->query($sql_accept) or die($conn->error);
$result_accept2=$conn->query($sql_accept2) or die($conn->error);

if($result_accept){
    echo   '<script>alert("ได้ทำการยืนยันออเดอร์เรียบร้อยแล้ว") </script>';
    $sql= "SELECT * FROM total_summary_partner WHERE partner_id ='".$_SESSION['member_id']."'"
    ;
    $result =$conn->query($sql) or die($conn->error);
    $read_tran = $result->fetch_assoc();
    $read_tran['total'] += (int)$_POST['total'];
    $read_tran['salary'] += (int)$_POST['early'];
    
   


   $sql_sum="INSERT INTO total_summary_partner ( `partner_id`, `total`, `salary`, `salary_month`,
    `balance`, `withdraw`, `description`) VALUES('".$_SESSION['member_id']."',
    '".$read_tran['total']."','".$read_tran['salary']."','".$read_tran['salary']."',
    '".$_SESSION['balance']."','-','ยอดขายออเดอร์ที่".$_POST['order_id']."'
    )" ;
     $result_sum =$conn->query($sql_sum) or die($conn->error);

     

   $_SESSION['balance']= $early;

   
   echo   '<script>windows.history.back(-1);</script>';


}
}




elseif(isset($_POST['decline'])){
$read="SELECT* FROM `member` WHERE `user` = '".$_POST['user']."' ";
$read_re =$conn->query($read) or die($conn->error);
$read_dec= $read_re->fetch_assoc();
$refund= (int)$read_dec['balance']+(int)$_POST['total'];
$sql_decline ="UPDATE `order` SET `status_order`=6  WHERE `order_id` ='".$_POST['order_id']."'";
$sql_decline2 = "UPDATE `member` SET `balance` = '".$refund."' WHERE `user` ='".$_POST['user']."' ";

$result_decline =$conn->query($sql_decline) or die($conn->error);
$result_decline2 =$conn->query($sql_decline2) or die($conn->error);

echo   '<script>alert("ได้ทำการยกเลิกออเดอร์เรียบร้อยแล้ว") </script>';
echo   '<script>windows.history.back();</script>';




}

elseif(isset($_POST['accept_myself'])){
    $early= (int)$_SESSION['balance'] +(int)$_POST['extra_early']; 
    $sql_accept="UPDATE `order` SET `status_order`=3 WHERE `order_id` ='".$_POST['order_id']."' ";
      $sql_accept2="UPDATE `member` SET `balance` = '".$early."' WHERE `member_id`='".$_SESSION['member_id']."'; ";
    
    $result_accept=$conn->query($sql_accept) or die($conn->error);
    $result_accept2=$conn->query($sql_accept2) or die($conn->error);
    
echo   '<script>alert("ได้ทำการยืนยันออเดอร์เรียบร้อยแล้ว") </script>';

if($result_accept){
    echo   '<script>aleart("ได้ทำการยืนยันออเดอร์เรียบร้อยแล้ว") </script>';
    $sql= "SELECT * FROM total_summary_partner WHERE partner_id ='".$_SESSION['member_id']."'"
    ;
    $result =$conn->query($sql) or die($conn->error);
    $read_tran = $result->fetch_assoc();
    $read_tran['total'] += (int)$_POST['total'];
    $read_tran['salary'] += (int)$_POST['extra_early'];
    
   


   $sql_sum="INSERT INTO total_summary_partner ( `partner_id`, `total`, `salary`, `salary_month`,
    `balance`, `withdraw`, `description`) VALUES('".$_SESSION['member_id']."',
    '".$read_tran['total']."','".$read_tran['salary']."','".$read_tran['salary']."',
    '".$_SESSION['balance']."','-','ยอดขายออเดอร์ที่".$_POST['order_id']."'
    )" ;
     $result_sum =$conn->query($sql_sum) or die($conn->error);

     $sql_sum_all="INSERT INTO total_summary ( `total`, `salary`, `salary_month`,
      `description`) VALUES(
     '".$read_tran['total']."','".$read_tran['salary']."','".$read_tran['salary']."','ยอดขายออเดอร์ที่".$_POST['order_id']."')" ;
      $result_sum_all =$conn->query($sql_sum_all) or die($conn->error);

   $_SESSION['balance']= $early;

  

echo   '<script>windows.history.back();</script>';
}}
elseif(isset($_POST['deliver_done'])){
    $read="SELECT* FROM `member` WHERE `user` = '".$_POST['user']."' ";
    $read_re =$conn->query($read) or die($conn->error);
    $read_dec= $read_re->fetch_assoc();
    $sql_done ="UPDATE `order` SET `status_order`=5  WHERE `order_id` ='".$_POST['order_id']."'";
    
    $result_done =$conn->query($sql_done) or die($conn->error);
    
    echo   '<script>alert("ทำการส่งอาหารให้ลูกค้าเรียบร้อย") </script>';
    echo   '<script>windows.history.back();</script>';
    
    
    
    
    }
?>