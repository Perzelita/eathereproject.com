<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>EATHERE ADMIN -LIST PARTNER</title>

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">


  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">EATHERE ADMIN</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Nav Item - Dashboard -->
    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="table_partner.php">
          <i class="fas fa-fw fa-table"></i>
          <span>รายชื่อคำขอร้านค้า</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="table_shipper.php">
          <i class="fas fa-fw fa-table"></i>
          <span>รายชื่อคำขอผู้จัดส่ง</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="table_partner_all.php">
          <i class="fas fa-fw fa-table"></i>
          <span>รายชื่อPartner</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="table_topup.php">
          <i class="fas fa-fw fa-table"></i>
          <span>คำขอการเติมเงิน</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="tables_withdraw.php">
          <i class="fas fa-fw fa-table"></i>
          <span>คำขอการถอนเงิน</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="transection.php">
          <i class="fas fa-fw fa-table"></i>
          <span>การเคลื่อนไหว</span></a>
      </li>
      


<!-- Nav Item - Tables -->
<li class="nav-item">
  <a class="nav-link" href="transection_month.php">
    <i class="fas fa-fw fa-table"></i>
    <span>สรุปยอดรายเดือน</span></a>
</li>


            

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

      <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

<!-- Sidebar Toggle (Topbar) -->
<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
  <i class="fa fa-bars"></i>
</button>



<!-- Topbar Navbar -->
<ul class="navbar-nav ml-auto">



 
    
 

  <div class="topbar-divider d-none d-sm-block"></div>

  <!-- Nav Item - User Information -->
  <li class="nav-item dropdown no-arrow">
    <a class="nav-link dropdown-toggle text-black-50" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Logout
    </a>
    <!-- Dropdown - User Information -->
    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
    


      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
        Logout
      </a>
    </div>
  </li>

</ul>

</nav>

    <!-- Content Wrapper -->
  

        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">ตารางรายชื่อpartnerทั้งหมด</h1>
        <?php  require_once('../php_cruid/connect_DB.php');

          $sql = "SELECT * FROM `member` WHERE NOT `status_member` = 'cus' AND NOT `status_member` = 'admin'  ";
          $result = $conn->query($sql);
          
                  if ($result->num_rows > 0) {
                      ?>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">ศูนย์รวม Partner ที่ได้ผ่านการยืนยันตนในระบบKYCแล้ว</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th scope="col">หมายเลขสมาชิก</th>
                      <th scope="col">สถานะ</th>
                      <th scope="col">ที่อยู่</th>
                      <th scope="col">ตำบล</th>
                      <th scope="col">อำเภอ</th>
                      <th scope="col">จังหวัด</th>

                      <th scope="col">รหัสไปรษณีย์</th>
                      <th scope="col">ชื่อผู้ใช้</th>
                      <th scope="col">เลขโทรศัพท์</th>
                      <th scope="col">อีเมล</th>


                      <th scope="col">ชื่อ</th>
                      <th scope="col">นามสกุล</th>
                      <th scope="col">อายุ</th>
                      <th scope="col">หมายเลขบัตรประชาชน</th>
                    
                      <th scope="col">วันเกิด</th>
                      <th scope="col">ชื่อร้าน</th>
                      <th scope="col">ประเภทของร้าน</th>

                      <th scope="col">เวลาเปิดรับ</th>
                      <th scope="col">เวลาปิดรับ</th>
                      <th scope="col">ประวัติร้านคร่าวๆ</th>
                      <th scope="col">วันที่ขอสมัคร</th>
                      <th scope="col">รูปหน้าตรง</th>
                      <th scope="col">รูปบัตรประชาชน</th>
                      <th scope="col">รูปปกร้าน</th>
                      <th scope="col">รูปบัญชี</th>
                      <th scope="col">รูปยืนยันตัวตน</th>
                      <th scope="col">เลขทะเบียนรถ</th>
                      <th scope="col">ประเภทรถ</th>
                      <th scope="col">ยี่ห้อรถ</th>
                      <th scope="col">รุ่น</th>
                      <th scope="col">ลักษณะรถ</th>
                      <th scope="col">รูปพรบรถหน้าแรก</th>
                      <th scope="col">พิกัด</th>




                      <th scope="col">จำนวนเงิน</th>




                    </tr>
                  </thead>
                  <tfoot>
                  <tr>
                      <th scope="col">หมายเลขสมาชิก</th>
                      <th scope="col">สถานะ</th>
                      <th scope="col">ที่อยู่</th>
                      <th scope="col">ตำบล</th>
                      <th scope="col">อำเภอ</th>
                      <th scope="col">จังหวัด</th>

                      <th scope="col">รหัสไปรษณีย์</th>
                      <th scope="col">ชื่อผู้ใช้</th>
                      <th scope="col">เลขโทรศัพท์</th>
                      <th scope="col">อีเมล</th>


                      <th scope="col">ชื่อ</th>
                      <th scope="col">นามสกุล</th>
                      <th scope="col">อายุ</th>
                      <th scope="col">หมายเลขบัตรประชาชน</th>
                    
                      <th scope="col">วันเกิด</th>
                      <th scope="col">ชื่อร้าน</th>
                      <th scope="col">ประเภทของร้าน</th>

                      <th scope="col">เวลาเปิดรับ</th>
                      <th scope="col">เวลาปิดรับ</th>
                      <th scope="col">ประวัติร้านคร่าวๆ</th>
                      <th scope="col">วันที่ขอสมัคร</th>
                      <th scope="col">รูปหน้าตรง</th>
                      <th scope="col">รูปบัตรประชาชน</th>
                      <th scope="col">รูปปกร้าน</th>
                      <th scope="col">รูปบัญชี</th>
                      <th scope="col">รูปยืนยันตัวตน</th>
                      <th scope="col">เลขทะเบียนรถ</th>
                      <th scope="col">ประเภทรถ</th>
                      <th scope="col">ยี่ห้อรถ</th>
                      <th scope="col">รุ่น</th>
                      <th scope="col">ลักษณะรถ</th>
                      <th scope="col">รูปพรบรถหน้าแรก</th>
                      <th scope="col">พิกัด</th>




                      <th scope="col">จำนวนเงิน</th>
                      
                    </tr>
                  </tfoot>
                  <tbody>
<?php                    $num=0;
                       while($row = $result->fetch_assoc()) { ?>
                              <tr>
                              <th scope="row"><?php echo $row["member_id"]; ?></th>
                              <td><?php echo $row["status_member"]; ?></td>
                              
                              <td><?php echo $row["no_address"]; ?></td>
                              <td><?php echo $row["district"]; ?></td>
                              <td><?php echo $row["amphoe"]; ?></td>
                              <td><?php echo $row["province"]; ?></td>
                              <td><?php echo $row["zipcode"]; ?></td>
                              <td><?php echo $row["user"]; ?></td>

                              <td><?php echo $row["telephone"]; ?></td>
                              <td><?php echo $row["email"]; ?></td>
                              <td><?php echo $row["name"]; ?></td>
                              <td><?php echo $row["surname"]; ?></td>
                              <td><?php
                                        $birthDate = $row["birthday"];

                                        $birthDate = explode("-", $birthDate);

                                        $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[2], $birthDate[1], $birthDate[0]))) > date("md") ? ((date("Y")-$birthDate[0])-1):(date("Y")-$birthDate[0]));
echo $age;
?></td>
                              <td><?php echo $row["citizen_id"]; ?></td>
                              <td><?php echo $row["birthday"]; ?></td>
                              <td><?php echo $row["partner_name"]; ?></td>
                              <td><?php echo $row["food_type"]; ?></td>
                              <td><?php echo $row["open_order"]; ?></td>
                              <td><?php echo $row["close_order"]; ?></td>
                              <td><?php echo $row["bio"]; ?></td>
                              <td><?php echo $row["created"]; ?></td>


                              <td><a class="btn btn-info" href="../pic/kyc/<?php echo $row["pic_profile"]; ?> " role="button">ดูรูปหน้าตรง</a></td>
                              <td><a class="btn btn-info" href="../pic/kyc/<?php echo $row["pic_ctizen_id"]; ?> " role="button">ดูรูปบัตรประชาชน</a></td>
                              <td><a class="btn btn-info" href="../pic/kyc/<?php echo $row["pic_cover"]; ?> " role="button">ดูรูปหน้าร้าน</a></td>
                              <td><a class="btn btn-info" href="../pic/kyc/<?php echo $row["pic_acc"]; ?> " role="button">ดูรูปบัญชี</a></td>
                              <td><a class="btn btn-info" href="../pic/kyc/<?php echo $row["pic_verify"]; ?> " role="button">ดูรูปยืนยันตัวตน</a></td>
                              <td><?php echo $row["venchle_id"]; ?></td>
                <td><?php echo $row["venchle_type"]; ?></td>
                <td><?php echo $row["venchle_brand"]; ?></td>
                <td><?php echo $row["venchle_series"]; ?></td>
                <td><?php echo $row["venchle_propoties"]; ?></td>
                <td><a class="btn btn-info" href="../pic/kyc/<?php echo $row["pic_booking_driver"]; ?> " role="button">ดูรูปพรบรถหน้าแรก</a></td>
                <td><a class="btn btn-info" href="https://www.google.com/maps/search/?api=1&query=<?php print  $row["latitude"] .",".$row["longitude"];?> " role="button" target="_blank">ดูพิกัด</a></td>

                              <td><?php echo $row["balance"]; ?></td>
                        </tr>
                            <?php } ?> 
                         </tbody>
                         </table>
              
                         <?php } else {
                           echo "0 results";
                        }
                        
                        ?>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">จะออกจากระบบหรือไม่</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="../php_front/signout.php" >Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
