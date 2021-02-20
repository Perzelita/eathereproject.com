<?php require_once('../php_front/authen.php'); ?>
<?php 
          
            if (isset($_POST['submit'])) {
              $status = $_POST['avalable'];
              if($status=="open")
                $status="SELECT  set partner_avalable set status ='open' WHERE partner_id_fk=$_SESSION['partner_id_fk'] ";
                $result = $conn->query($status)  or die($conn->error);
                if($result){echo '<script> alert ("ได้เปิดร้านเป็นที่เรียบร้อยแล้ว")</script>';
                  header('Refresh:0;');}
                else{}
              }
             elseif ($status=="close"){
                $sql_avalable="SELECT  set partner_avalable set status ='close' WHERE partner_id_fk=$_SESSION['partner_id_fk'] ";
                $result = $conn->query($status)  or die($conn->error);
                if($result){echo '<script> alert ("ปิดร้านเรียบร้อยแล้ว")</script>';
                  header('Refresh:0;');}
                  else{}
                
              }
              
            }
            ?>