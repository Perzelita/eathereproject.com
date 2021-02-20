
<?php include_once('../php_front/authen.php');?>
<?php



if(isset($_POST['submit'])){

    
    $sql ="UPDATE `member`
     SET `no_address`   = '".$_POST['no_address']."',
         `district`     = '".$_POST['district']."',
         `amphoe`       = '".$_POST['amphoe']."',
         `province`     = '".$_POST['province']."',
         `zipcode`      = '".$_POST['zipcode']."',
         `latitude`      = '".$_POST['latitude']."',
         `longitude`      = '".$_POST['longitude']."'

        
           WHERE member_id = '".$_SESSION['member_id']."';";



$result = $conn->query($sql) or die($conn->error);

if($result){
    $_SESSION['no_address'] =$_POST['no_address'];
    $_SESSION['district'] =$_POST['district'];
    $_SESSION['amphoe']=$_POST['amphoe'];
    $_SESSION['province']=$_POST['province'];
    $_SESSION['zipcode']=$_POST['zipcode'];
    $_SESSION['latitude']=$_POST['latitude'];
    $_SESSION['longitude']=$_POST['longitude'];
    echo '<script> alert  ("แก้ไขข้อมูลสำเร็จ")</script>';

    echo '<script>  window.history.go(-1);</script>';
    
    
}
else
    {
    echo '<script> alert ("ไม่สามารถแก้ไขได้")</script>';
    header('Refresh:0;');
    }
}
else{header('Refresh:0;');
    }
?>