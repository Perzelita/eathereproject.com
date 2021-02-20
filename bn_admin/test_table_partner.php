<?php require_once('../php_front/authen.php');

$sql = "SELECT * FROM `request_kyc` WHERE type_kyc = 'partner' ";
$result = $conn->query($sql);

        if ($result->num_rows > 0) {
            ?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

 
 

            // output data of each row
            
        <table class="table table-striped">
        <thead class="thead-dark">
        
          <tr>
          <th scope="col"> หมายเลขคำขอ </th>
            <th scope="col">สถานะคำขอ</th>
            <th scope="col">รูปแบบคำชอ</th>
            <th scope="col">ชื่อผู้ใช้</th>
            <th scope="col">ชื่อ</th>
            <th scope="col">นามสกุล</th>
            <th scope="col">อายุ</th>
            <th scope="col">หมายเลขบัตรประชาชน</th>
            <th scope="col">อีเมล</th>
            <th scope="col">เลขโทรศัพท์</th>
            <th scope="col">วันเกิด</th>
            <th scope="col">ที่อยู่</th>
            <th scope="col">ที่อยู่ต่อ</th>
            <th scope="col">ตำบล</th>
            <th scope="col">อำเภอ</th>
            <th scope="col">จังหวัด</th>
            <th scope="col">รหัสไปรษณีย์</th>
            <th scope="col">พิกัด</th>
            <th scope="col">วันที่ขอสมัคร</th>
            <th scope="col">รูปหน้าตรง</th>
            <th scope="col">รูปบัตรประชาชน</th>
            <th scope="col">รูปบัญชี</th>
            <th scope="col">รูปยืนยันตัวตน</th>
            <th scope="col">เลขทะเบียนรถ</th>
            <th scope="col">ประเภทรถ</th>
            <th scope="col">ยี่ห้อรถ</th>
            <th scope="col">รุ่น</th>
            <th scope="col">ลักษณะรถ</th>
            <th scope="col">รูปพรบรถหน้าแรก</th>
            
            

          </tr>
        </thead>
       
       
            
        <tbody>
        <?php
        $num=0;
         while($row = $result->fetch_assoc()) { ?>
                <tr>
                <th scope="row"><?php echo $row["request_kyc_id"]; ?></th>
                <td><?php echo $row["status_verify_id"]; ?></td>
                <td><?php echo $row["type_kyc"]; ?></td>
                <td><?php echo $row["user"]; ?></td>
                <td><?php echo $row["name"]; ?></td>
                <td><?php echo $row["surname"]; ?></td>
                <td><?php echo $row["age"]; ?></td>
                <td><?php echo $row["citizen_id"]; ?></td>
                <td><?php echo $row["email"]; ?></td>
                <td><?php echo $row["telephone"]; ?></td>
                <td><?php echo $row["birthday"]; ?></td>
                <td><?php echo $row["no_address1"]; ?></td>
                <td><?php echo $row["no_address2"]; ?></td>
                <td><?php echo $row["district"]; ?></td>
                <td><?php echo $row["amphoe"]; ?></td>
                <td><?php echo $row["province"]; ?></td>
                <td><?php echo $row["zipcode"]; ?></td>
                <td><a class="btn btn-info" href="https://www.google.com/maps/search/?api=1&query=<?php print  $row["latitude"] .",".$row["longitude"];?> " role="button" target="_blank">ดูพิกัด</a></td>
                <td><?php echo $row["partner_name"]; ?></td>
                <td><?php echo $row["open_order"]; ?></td>
                <td><?php echo $row["close_order"]; ?></td>
                <td><?php echo $row["bio"]; ?></td>
                <td><?php echo $row["timestamp"]; ?></td>
                
                
                <td><a class="btn btn-info" href="../pic/kyc/<?php echo $row["pic_profile"]; ?> " role="button">ดูรูปหน้าตรง</a></td>
                <td><a class="btn btn-info" href="../pic/kyc/<?php echo $row["pic_ctizen_id"]; ?> " role="button">ดูรูปบัตรประชาชน</a></td>
                <td><a class="btn btn-info" href="../pic/kyc/<?php echo $row["pic_cover"]; ?> " role="button">ดูรูปหน้าร้าน</a></td>
                <td><a class="btn btn-info" href="../pic/kyc/<?php echo $row["pic_acc"]; ?> " role="button">ดูรูปบัญชี</a></td>
                <td><a class="btn btn-info" href="../pic/kyc/<?php echo $row["pic_verify"]; ?> " role="button">ดูรูปยืนยันตัวตน</a></td>
               
              </tr>
              <?php } ?> 
           </tbody>
           </table>

           <?php } else {
             echo "0 results";
          }
          
          ?>
           
          
        
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
