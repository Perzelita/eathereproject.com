<?php
require_once('../php_front/authen.php');
$time=date('H:i');

if(isset($_GET['submit'])){
if ($_GET['change']>0){
   



 
  

    foreach ($_GET['m_id'] as $row => $value) {
         if ($_GET['m_unit'][$row] >0) { 
             


    $sql_order="INSERT INTO `order`(`partner_id`, `member_id`, `time_order`, `cus_name`,
      `total`, `early`, `deliver_early`, `extra_early`, `time_estimate`,
      `status_order`, `note_to_shipper`) VALUES ('".$_GET['partner_id']."','".$_GET['member_id']."',
      '".$date."','".$_GET['cus_name']."','".$_GET['total']."','".$_GET['early']."',
      '".$_GET['deliver_early']."','".$_GET['extra_early']."','".$_GET['time_estimate']."','1','".$_GET['note']."'
      );";

      $sql_detail="INSERT INTO `order_details`(`order_details_id`, `order_id`, `menu_id`,`menu_name`, `unit`, `price_total`, `totaly`)
       VALUES (LAST_INSERT_ID(),LAST_INSERT_ID(),'".$_GET['m_id'][$row]."','".$_GET['m_name'][$row]."','".$_GET['m_unit'][$row]."',
       '".$_GET['m_p_d'][$row]."','".$_GET['m_t'][$row]."');";

$change_balance = "UPDATE member set balance= '".$_GET['change']."' WHERE member_id = '".$_GET['member_id']."' ;";
$change_balanced = $conn->query($change_balance)  or die($conn->error);

                      $result_order = $conn->query($sql_order)  or die($conn->error);
                      $result_detail = $conn->query($sql_detail)  or die($conn->error);

                      $delete_temp= "DELETE FROM cart_temp WHERE member_id = '".$_GET['member_id']."' ";
                      $_resule_del = $conn->query($delete_temp) or die($conn->error);
                     
                      if ($_resule_del){
                        echo '<script>alert("ทางเราได้รับคำสั่งสินค้าแล้วระบบจะส่งเลขออเดอร์ผ่าน SMS เบอร์โทรของคุณ ขอบคุณที่ใช้บริการEat Here");</script>';
                                $_SESSION['balance']=$_GET['change'];

                                header("Location: ../index.php");

         
                     
                  
                      
                      

}

}

  




}


}



else{echo '<script>alert("เงินของท่านไม่พอสั่งซื้อกรุณาเติมเงินด้วยค่ะ");</script>';
    echo '<script>  window.history.go(-1);</script>';
    }
}




?>