<?php require_once('../php_front/authen.php'); ?>

<?php 

//print_r($_POST);
if(isset($_POST['submit'])){
    $sql_check_phone = "SELECT * FROM `member` WHERE `telephone` = '".$_POST['telephone']."' ";
    $check_phone = $conn->query($sql_check_phone) or die($conn->error);

    if(!$check_phone->num_rows){
        
    
$hashed = password_hash($_POST['password'], PASSWORD_DEFAULT);
$sql ="INSERT INTO `member` (`status_member` ,`user`, `telephone`, `password`, `email`, `no_address`, `district`, `amphoe`, `province`, `zipcode`,`latitude`,`longitude`, `created`, `updated`,`balance`, `last_login`) 
        VALUES (
                'cus',
                '".$_POST['user']."',
                '".$_POST['telephone']."',
                '".$hashed."',
                '".$_POST['email']."',
                '',
                '',
                '',
                '',
                '',
                '".$_POST['latitude']."',
                '".$_POST['longitude']."',
                '".date("Y-m-d H:i:s")."',
                '".date("Y-m-d H:i:s")."',
                '0',
                '".date("Y-m-d H:i:s")."'
                );";
/*$sql2 ="INSERT INTO `address` (`id_address`, `member_id_member`, `no_address`, `district`, `amphoe`, `province`, `zipcode`, `location`)
 VALUES (
    LAST_INSERT_ID(),
    LAST_INSERT_ID(),
     'กรุณากรอกที่อยู่ ชื่อ เลขที่ หมู่บ้าน ตรอก ซอย',
     'กรุณากรอกที่ตำบล',
     'กรุณากรอกที่อำเภอ',
     'กรุณากรอกจังหวัด',
     'กรุณากรอกรหัสไปรษณีย์',
     'จุดพิกัด'
     );";                
*/
$result = $conn->query($sql)  or die($conn->error);
//$result2 = $conn->query($sql2)  or die($conn->error)  ;
    if($result){
        echo '<script> alert  ("Success")</script>';
        echo '<script>  window.history.go(-1);</script>';
        header('Refresh:0;');
        
    }
    else
        {
       echo '<script> alert ("...")</script>';
       header('Refresh:0;');
        }



}
else {
    echo '<script> alert ("หมายเลขนี้ได้ถูกใช้ไปแล้ว")</script>';
    echo '<script>  window.history.go(-1);</script>';
    header('Refresh:0;');
     }
     
}

?>