<?php 

include_once('../php_front/authen.php');
if (isset($_POST['submit'])) {
    $username = $conn->real_escape_string($_POST['telephone']);
    $password = $conn->real_escape_string($_POST['password']);

    
 $sql="SELECT * FROM `address` LEFT OUTER JOIN 'member' ON 'address'.'id_address' = 'member'.'id_member'
  UNION 
  SELECT * FROM 'member' RIGHT OUTER JOIN 'member' ON 'address'.'id_address' = 'member'.'id_member' 
  WHERE `telephone` ='".$username."'  "; 
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    echo '<pre>',print_r($row), '</pre>';
  /*  if( !empty($row) && password_verify($password, $row['password'] )) {


        $_SESSION['id_member'] = $row['id_member'];
        $_SESSION['user'] = $row['user'];
        $_SESSION['telephone'] = $row['telephone'];
        $_SESSION['password'] = $row['password'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['created'] = $row['created'];
        $_SESSION['updated'] = $row['updated'];
        $_SESSION['status_member'] = $row['status_member'];
        
        $_SESSION['member_id_member'] = $row['member_id_member'];
        $_SESSION['no_address'] = $row['no_address'];
        $_SESSION['district'] = $row['district'];
        $_SESSION['amphoe'] = $row['amphoe'];
        $_SESSION['province'] = $row['province'];
        $_SESSION['zipcode'] = $row['zipcode'];
        $_SESSION['location'] = $row['location'];

        $_SESSION['balance'] = $row['balance'];
        $_SESSION['cashback'] = $row['cashback'];
        

        echo '<script> alert ("เข้าสู่ระบบสำเร็จ") </script>';
        echo '<script>  window.history.go(-1);</script>';
        header('Refresh:0;');
      
      //  setcookie("password",$POST_['password'],time()+3600);
      //  setcookie("username",$POST_['telephone'],time()+3600);
    }


    else{
        
        echo '<script> alert ("ชื่อผู้ใช้ หรือ รหัสผ่านไม่ถูกต้อง")</script>';
        echo '<script>  window.history.go(-1);</script>';
        header('Refresh:0;');
        
    }
   

}

*/


?>