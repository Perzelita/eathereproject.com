<?php 

include_once('../php_front/authen.php');
if (isset($_POST['submit'])) {
    $username = $conn->real_escape_string($_POST['telephone']);
    $password = $conn->real_escape_string($_POST['password']);

   // $sql="SELECT * FROM `member`,'address' WHERE `telephone` ='".$username."' "; 
    $sql=" SELECT * FROM member  
           WHERE member.telephone = '".$username."' "; 
//INNER JOIN address ON member.id_member = address.member_id_member 
    $result = $conn->query($sql) or die($conn->error); 
    $row = $result->fetch_assoc();
   // echo '<pre>',print_r($row), '</pre>';
    if( !empty($row) && password_verify($password, $row['password'] )) {


        $_SESSION['member_id'] = $row['member_id'];
        $_SESSION['user'] = $row['user'];
        $_SESSION['telephone'] = $row['telephone'];
        $_SESSION['password'] = $row['password'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['created'] = $row['created'];
        $_SESSION['updated'] = $row['updated'];
        
        $_SESSION['status_member'] = $row['status_member'];
        $_SESSION['balance'] = $row['balance'];

 
        
        $_SESSION['no_address'] = $row['no_address'];
        $_SESSION['district'] = $row['district'];
        $_SESSION['amphoe'] = $row['amphoe'];
        $_SESSION['province'] = $row['province'];
        $_SESSION['zipcode'] = $row['zipcode'];
       
        $_SESSION['latitude'] = $row['latitude'];
        $_SESSION['longitude'] = $row['longitude'];
        $_SESSION['created'] = $row['created'];
        $_SESSION['updated'] = $row['updated'];
        $_SESSION['last_login'] = $row['last_login'];
        

        
      // $_SESSION['cashback'] = $row['cashback'];
        
        if ($_SESSION['status_member'] == 'admin'){
            echo '<script> alert ("เข้าสู่ระบบสำเร็จ กำลังจะไปหน้าผู้ดูแลระบบ") </script>';
            header('Location: ../bn_admin');
        }

        elseif ($_SESSION['status_member'] == 'partner'){
            $sql_partner="SELECT * FROM member
             INNER JOIN menu
             ON member.member_id = menu.partner_id_fk 
             INNER JOIN partner_avalable
             ON member.member_id = partner_avalable.partner_id_fk
             INNER JOIN total_summary_partner
             ON member.member_id = total_summary_partner.partner_id;
             ";
             $result_partner = $conn->query($sql_partner) or die($conn->error);
             $row_partner = $result_partner->fetch_assoc();

            $_SESSION['name']=$row['name'];
            $_SESSION['surname']=$row['surname'];
            $_SESSION['age']=$row['age'];
            $_SESSION['citizen_id']=$row['citizen_id'];
            $_SESSION['birthday']=$row['birthday'];
            $_SESSION['partner_name']=$row['partner_name'];
            $_SESSION['food_type']=$row['food_type'];
            $_SESSION['open_order']=$row['open_order'];
            $_SESSION['close_order']=$row['close_order'];
            $_SESSION['bio']=$row['bio'];
            $_SESSION['pic_profile']=$row['pic_profile'];
            $_SESSION['pic_cover']=$row['pic_cover'];
            $_SESSION['pic_acc']=$row['pic_acc'];
            $_SESSION['pic_verify']=$row['pic_verify'];

            $_SESSION['menu_id']=$row_partner['menu_id'];
            $_SESSION['partner_id_fk']=$row_partner['partner_id_fk'];
            $_SESSION['avalable']=$row_partner['avalable'];
            $_SESSION['menu_name']=$row_partner['menu_name'];
            $_SESSION['unit']=$row_partner['unit'];
            $_SESSION['price']=$row_partner['price'];

            $_SESSION['partner_avalable_id']=$row_partner['partner_avalable_id'];
            $_SESSION['partner_id_fk']=$row_partner['partner_id_fk'];
            $_SESSION['status']=$row_partner['status'];

            $SESSION['total_summary_partner_id']=$row_partner['total_summary_partner_id'];
            $SESSION['partner_id']=$row_partner['partner_id'];
            $SESSION['total']=$row_partner['total'];
            $SESSION['salary']=$row_partner['salary'];
            $SESSION['salary_month']=$row_partner['salary_month'];
            $SESSION['balance']=$row_partner['balance'];
            $SESSION['withdraw']=$row_partner['withdraw'];
            $SESSION['description']=$row_partner['description'];

            echo '<pre>',print_r($row), '</pre>';
            echo '<pre>',print_r($row_partner), '</pre>';

            echo '<script> alert ("เข้าสู่ระบบสำเร็จ กำลังจะไปหน้าระบบภายในร้าน") </script>';
            header('Location: ../bn_partner');
            }    
            elseif ($_SESSION['status_member'] == 'shipper'){
                $sql_shipper="SELECT * FROM member
                 INNER JOIN shipper
                 ON member.member_id = shipper.member_id
                 INNER JOIN total_summary_shipper
                 on member.member_id = total_summary_shipper.shipper_id; 
                 
                 ";
                 $result_shipper = $conn->query($sql_shipper) or die($conn->error);
                 $row_shipper = $result_shipper->fetch_assoc();
    
                $_SESSION['name']=$row['name'];
                $_SESSION['surname']=$row['surname'];
                $_SESSION['age']=$row['age'];
                $_SESSION['citizen_id']=$row['citizen_id'];
                $_SESSION['birthday']=$row['birthday'];
                
                $_SESSION['pic_profile']=$row['pic_profile'];
                $_SESSION['pic_cover']=$row['pic_cover'];
                $_SESSION['pic_acc']=$row['pic_acc'];
                $_SESSION['pic_verify']=$row['pic_verify'];

                $_SESSION['venchle_id']=$row['venchle_id'];
                $_SESSION['venchle_type']=$row['venchle_type'];
                $_SESSION['venchle_brand']=$row['venchle_brand'];
                $_SESSION['venchle_series']=$row['venchle_series'];
                $_SESSION['venchle_propoties']=$row['venchle_propoties'];
                $_SESSION['pic_booking_driver']=$row['pic_booking_driver'];

    
                
                
                $SESSION['total_summary_shipper_id']=$row_shipper['total_summary_shipper_id'];
                $SESSION['shipper_id']=$row_shipper['shipper_id'];
                $SESSION['total']=$row_shipper['total'];
                $SESSION['salary']=$row_shipper['salary'];
                $SESSION['salary_month']=$row_shipper['salary_month'];
                $SESSION['balance']=$row_shipper['balance'];
                $SESSION['withdraw']=$row_shipper['withdraw'];
                $SESSION['description']=$row_shipper['description'];
    
                echo '<script> alert ("เข้าสู่ระบบสำเร็จ กำลังจะไปหน้าระบบขับรถส่งอาหาร") </script>';
                header('Location: ../bn_shipper');
                }  
        else{  
            echo '<script> alert ("เข้าสู่ระบบสำเร็จ") </script>';
            echo '<script>  window.history.go(-1);</script>';
            header('Refresh:0;');}
      
      
      //  setcookie("password",$POST_['password'],time()+3600);
      //  setcookie("username",$POST_['telephone'],time()+3600);
    }


    else{
        
        echo '<script> alert ("ชื่อผู้ใช้ หรือ รหัสผ่านไม่ถูกต้อง")</script>';
        echo '<script>  window.history.go(-1);</script>';
       header('Refresh:0;');
        
    }
   

}


?>