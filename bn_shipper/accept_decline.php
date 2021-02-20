
<?php
require_once('../php_front/authen.php');

if(isset($_POST['accept'])){
    $early= (int)$_SESSION['balance'] + (int)$_POST['deliver_early']; 
    $sql_accept="UPDATE `order`, SET `status_order`='4',`shipper_id`='".$_SESSION['member_id']."' WHERE `order_id` ='".$_POST['order_id']."' ";
     $sql_accept2="UPDATE member SET balance = '".$early."' WHERE member_id='".$_SESSION['member_id']."'; ";
    
$result_accept=$conn->query($sql_accept) or die($conn->error);
$result_accept2=$conn->query($sql_accept2) or die($conn->error);

if($result_accept){
    $sql= "SELECT * FROM total_summary_shipper WHERE shipper_id ='".$_SESSION['member_id']."'"
    ;
    $result =$conn->query($sql) or die($conn->error);
    $read_tran = $result->fetch_assoc();
    $read_tran['total'] += (int)$_POST['total'];
    $read_tran['salary'] += (int)$_POST['deliver_early'];
    
   


   $sql_sum="INSERT INTO total_summary_shipper ( `shipper_id`, `total`, `salary`, `salary_month`,
    `balance`, `withdraw`, `description`) VALUES('".$_SESSION['member_id']."',
    '".$read_tran['total']."','".$read_tran['salary']."','".$read_tran['salary']."',
    '".$_SESSION['balance']."','-','ยอดขายออเดอร์ที่".$_POST['order_id']."'
    )" ;
     $result_sum =$conn->query($sql_sum) or die($conn->error);

     

   $_SESSION['balance']= $early;

   echo   '<script>alert("ได้ทำการยืนยันออเดอร์เรียบร้อยแล้ว") </script>';

   echo   '<script>windows.history.go(-1);</script>';


}
}
elseif(isset($_POST['recept'])){
    $read="SELECT* FROM `member` WHERE `user` = '".$_POST['user']."' ";
    $read_re =$conn->query($read) or die($conn->error);
    $read_dec= $read_re->fetch_assoc();
    $sql_done ="UPDATE `order` SET `status_order`=4  WHERE `order_id` ='".$_POST['order_id']."'";
    
    $result_done =$conn->query($sql_done) or die($conn->error);
    
    echo   '<script>alert("ทำการรับของเรียบร้อย") </script>';
    echo   '<script>windows.history.go(-1);</script>';
    
    
    
    
    }




elseif(isset($_POST['deliver_done'])){
    $read="SELECT* FROM `member` WHERE `user` = '".$_POST['user']."' ";
    $read_re =$conn->query($read) or die($conn->error);
    $read_dec= $read_re->fetch_assoc();
    $sql_done ="UPDATE `order` SET `status_order`=5  WHERE `order_id` ='".$_POST['order_id']."'";
    
    $result_done =$conn->query($sql_done) or die($conn->error);
    
    echo   '<script>alert("ทำการส่งอาหารให้ลูกค้าเรียบร้อย") </script>';
    echo   '<script>windows.history.go(-1);</script>';
    
    
    
    
    }
?>