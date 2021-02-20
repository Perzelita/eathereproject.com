<?php
require_once('../php_front/authen.php');
if(isset($_GET['submit'])){

  if($_SESSION['balance']>= $_GET['amount']){  
    $balance_least= $_SESSION['balance'] - $_GET['amount'] ;
    $sql_request_withdraw=" INSERT INTO `request_withdraw`( `member_id`, `status_member`, `name`, `telephone`, `balance_least`, `amount`, `status`, `namebank`, `no_account`, `date`, `time`) 
    
    VALUES ('".$_SESSION['member_id']."','".$_SESSION['status_member']."','".$_SESSION['name']."',
    '".$_SESSION['telephone']."',$balance_least,'".$_GET['amount']."',1,'".$_GET['namebank']."',
    '".$_GET['no_account']."','".date("Y-m-d")."','".date("H:i")."');

  ";

  $request_withdraw = $conn->query($sql_request_withdraw)  or die($conn->error);


  $sql_read="SELECT * FROM `total_summary` ORDER BY `total_summary`.`total_summary_id` DESC";
  $result_read = $conn->query($sql_read)  or die($conn->error);
  $row_read = $result_read->fetch_assoc();
  $row_read['withdraw'] += $_GET['amount'];
  $total_summary = $row_read['deposit'] - $_GET['amount'];
  $total_summary="INSERT INTO `total_summary` ( `total_summary`, `salary`, `salary_month`, `deposit`, `withdraw`  )
      
  VALUES (
      '$total_summary',
      '0',
      '0',
      '0',
      '".$row_read['withdraw']."'
      
         
    );";
          
 $result_writed = $conn->query($total_summary)  or die($conn->error);
  




 date_default_timezone_set("Asia/Bangkok");

 $date=date('d-m-Y H:i:s');
 $description_withdraw = "ถอนเงินจำนวน".$_GET['amount']."กับPartner ".$_SESSION['name'];
 

 $sql_read_partner="SELECT * FROM `total_summary_partner` WHERE `partner_id` = '".$_SESSION['member_id']."' ORDER BY `total_summary_partner`.`total` DESC limit 1 ";
      $result_read_partner = $conn->query($sql_read_partner)  or die($conn->error);
     $row_read_partner = $result_read_partner->fetch_assoc();
      $row_read_partner['withdraw'] += $_GET['amount'];
 
     $sql_total_summary_partner="INSERT INTO `total_summary_partner` ( `partner_id`, `total`, `salary`, `salary_month`, `balance`, `withdraw`, `description`)
             
      VALUES (
             '".$_SESSION['member_id']."',
             '".$_SESSION['balance']."',
             '0',
             '0',
             '$balance_least',
             '".$row_read_partner['withdraw']."',
             'ถอนเงินออก' );";
                 
        $result_write_partner = $conn->query($sql_total_summary_partner)  or die($conn->error);
 
         

  
if($request_withdraw){
    $_SESSION['balance'] -= $_GET['amount'];




    $sql_tran_withdraw="INSERT INTO `transcription` (`date`, `description`, `deposit`, `change`, `balance`, `note`)
     
 VALUES (
     '$date',
     '$description_withdraw',
     '0',
     '".$_GET['amount']."',
     '".$_SESSION['balance']."',     
  'Completed' );";
         $result_withdraw_transaction = $conn->query($sql_tran_withdraw)  or die($conn->error);
 

    

   
    $sql_balance_update ="UPDATE member SET balance ='".$_SESSION['balance']."' WHERE member_id ='".$_SESSION['member_id']."'; ";
    $result_sql_balance = $conn->query($sql_balance_update)  or die($conn->error);
  echo '<script>alert("ได้ส่งคำขอการถอนเงินเรียบร้อยแล้ว รอผลยืนยันจากSMS และ กรุณาตรวจสอบยอดเงินเข้าภายใน2-3ชม ")</script>';
 include('../php_cruid/line_notify/line_notify_withdraw.php');
 echo '<script>  window.history.go(-1);</script>';





}
  

}




else{ echo '<script>alert("จำนวนเงินต้องการถอนไม่พอ")</script>';
    echo '<script>  window.history.go(-1);</script>';}
 
}


?>