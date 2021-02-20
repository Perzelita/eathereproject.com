<?php require_once('../php_front/authen.php'); ?>
<?php 




if(isset($_POST['submit'])){
    $sql_check_phone = "SELECT * FROM `member` WHERE `telephone` = '".$_POST['telephone']."' AND `citizen_id`= '".$_POST['citizen_id']."'  ";
    $check_phone = $conn->query($sql_check_phone) or die($conn->error);

    if(!$check_phone->num_rows){
include './line_notify/line_notify_kyc.php';
$location = '../pic/kyc/';

    $pic_profile = $_FILES['pic_profile']['name'];
    $temp_pic_profile = $_FILES['pic_profile']['tmp_name'];

    $pic_ctizen_id = $_FILES['pic_ctizen_id']['name'];
    $temp_pic_ctizen_id = $_FILES['pic_ctizen_id']['tmp_name'];

    $pic_cover = $_FILES['pic_cover']['name'];
    $temp_pic_cover = $_FILES['pic_cover']['tmp_name'];

    $pic_acc = $_FILES['pic_acc']['name'];
    $temp_pic_acc = $_FILES['pic_acc']['tmp_name'];

    $pic_verify = $_FILES['pic_verify']['name'];
    $temp_pic_verify = $_FILES['pic_verify']['tmp_name'];

    
move_uploaded_file($temp_pic_profile,$location.$pic_profile);  
move_uploaded_file($temp_pic_ctizen_id,$location.$pic_ctizen_id);          
move_uploaded_file($temp_pic_cover,$location.$pic_cover);
move_uploaded_file($temp_pic_acc,$location.$pic_acc);
move_uploaded_file($temp_pic_verify,$location.$pic_verify);


    $sql="INSERT INTO `request_kyc` (`status_verify_id`,`type_kyc`,`name`, `surname`,`user`,
                                    `age`,`citizen_id`, `birthday`, `email`, `telephone`, `no_address1`, `no_address2`, `district`,
                                     `amphoe`, `province`, `zipcode`, `latitude`, `longitude`, `partner_name`, `food_type`, `open_order`,
                                      `close_order`, `bio`, `timestamp`,`pic_profile`,`pic_ctizen_id`,
                                      `pic_cover`,`pic_acc`,`pic_verify`)
    VALUES ('0',
            'partner',
            '".$_POST['name']."',
            '".$_POST['surname']."',
            '".$_POST['user']."',
            '".$_POST['age']."',
            '".$_POST['citizen_id']."',
            '".$_POST['birthday']."',
            '".$_POST['email']."',
            '".$_POST['telephone']."',
            '".$_POST['no_address1']."',
            '".$_POST['no_address2']."',
            '".$_POST['district']."',
            '".$_POST['amphoe']."',
            '".$_POST['province']."',
            '".$_POST['zipcode']."',
            '".$_POST['latitude']."',
            '".$_POST['longitude']."',
            '".$_POST['partner_name']."',
            '".$_POST['food_type']."',
            '".$_POST['open_order']."',
            '".$_POST['close_order']."',
            '".$_POST['bio']."',
            '".date("Y-m-d H:i")."',
            '".$pic_profile."',
            '".$pic_ctizen_id."',
            '".$pic_cover."',
            '".$pic_acc."',
            '".$pic_verify."'

    );";
    $result = $conn->query($sql)  or die($conn->error);
    //$result2 = $conn->query($sql2)  or die($conn->error)  ;
        if($result){
            echo '<script> alert  ("ทำการสมัครสำเร็จ ท่านสามารถรอรับผลทาง E-mail ภายใน 3-5 วันทำการ")</script>';
            header('location:../index.php');
            header('Refresh:0;');

            
        }
        else
            {
           echo '<script> alert ("...")</script>';
           header('Refresh:0;');
            }
    
    
    
    }
    else {
        echo '<script> alert ("หมายเลขโทรศัพท์หรือบัตรประชาชนได้ถูกใช้ไปแล้ว")</script>';
        echo '<script>  window.history.go(-1);</script>';
        header('Refresh:0;');
         }
         
    }

    elseif (isset($_POST['submit1'])){
        $sql_check_phone = "SELECT * FROM `member` WHERE `telephone` = '".$_POST['telephone']."' AND `citizen_id`= '".$_POST['citizen_id']."'  ";
        $check_phone = $conn->query($sql_check_phone) or die($conn->error);
    
        if(!$check_phone->num_rows){

        include './line_notify/line_notify_kyc.php';

        $pic_profile = $_FILES['pic_profile']['name'];
    $temp_pic_profile = $_FILES['pic_profile']['tmp_name'];

    $pic_ctizen_id = $_FILES['pic_ctizen_id']['name'];
    $temp_pic_ctizen_id = $_FILES['pic_ctizen_id']['tmp_name'];

    $pic_booking_driver = $_FILES['pic_booking_driver']['name'];
    $temp_pic_booking_driver = $_FILES['pic_booking_driver']['tmp_name'];

    $pic_acc = $_FILES['pic_acc']['name'];
    $temp_pic_acc = $_FILES['pic_acc']['tmp_name'];

    $pic_verify = $_FILES['pic_verify']['name'];
    $temp_pic_verify = $_FILES['pic_verify']['tmp_name'];

    $location = '../pic/kyc/';
        
        move_uploaded_file($temp_pic_profile,$location.$pic_profile);       
        move_uploaded_file($temp_pic_ctizen_id,$location.$pic_ctizen_id)   ;     
        move_uploaded_file($temp_pic_booking_driver,$location.$pic_booking_driver)   ;     
        move_uploaded_file($temp_pic_acc,$location.$pic_acc)        ;
        move_uploaded_file($temp_pic_verify,$location.$pic_verify);

        $sql="INSERT INTO `request_kyc` (`status_verify_id`,`type_kyc`,`name`, `surname`,`user`,
        `age`,`citizen_id`, `birthday`, `email`, `telephone`, `no_address1`, `no_address2`, `district`,
         `amphoe`, `province`, `zipcode`, `latitude`, `longitude`, `venchle_id`, `venchle_type`, `venchle_brand`,
         `venchle_series`, `venchle_propoties`, `timestamp`, `pic_profile`,`pic_ctizen_id`, `pic_booking_driver`, `pic_acc`, `pic_verify`)
         VALUES ('0',
            'shipper',
            '".$_POST['name']."',
            '".$_POST['surname']."',
            '".$_POST['user']."',
            '".$_POST['age']."',
            '".$_POST['citizen_id']."',
            '".$_POST['birthday']."',
            '".$_POST['email']."',
            '".$_POST['telephone']."',
            '".$_POST['no_address1']."',
            '".$_POST['no_address2']."',
            '".$_POST['district']."',
            '".$_POST['amphoe']."',
            '".$_POST['province']."',
            '".$_POST['zipcode']."',
            '".$_POST['latitude']."',
            '".$_POST['longitude']."',
            '".$_POST['venchle_id']."',
            '".$_POST['venchle_type']."',
            '".$_POST['venchle_brand']."',
            '".$_POST['venchle_series']."',
            
            '".$_POST['venchle_propoties']."',
            '".date("Y-m-d H:i:s")."',
            '".$pic_profile."',
            '".$pic_ctizen_id."',
            '".$pic_booking_driver."',
            '".$pic_acc."',
            '".$pic_verify."'
    );";
         
         $result = $conn->query($sql)  or die($conn->error);
         //$result2 = $conn->query($sql2)  or die($conn->error)  ;
             if($result){
                 echo '<script> alert  ("ทำการสมัครสำเร็จ ท่านสามารถรอรับผลทาง E-mail ภายใน 3-5 วันทำการ")</script>';
                 header('location:../index.php');
                 header('Refresh:0;');
                 
             }
             else
                 {
                echo '<script> alert ("...")</script>';
                header('Refresh:0;');
                 }
    }
    else {
        echo '<script> alert ("หมายเลขโทรศัพท์หรือบัตรประชาชนได้ถูกใช้ไปแล้ว")</script>';
        echo '<script>  window.history.go(-1);</script>';
        header('Refresh:0;');
         }
         
    }
    


?>