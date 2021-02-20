<!DOCTYPE html>
<html lang="en">
<?php require_once('../php_front/authen.php');?>

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>EAT HERE Withdraw</title>

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
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
      <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas "></i>
      </div>
      <div class="sidebar-brand-text mx-3">EAT HERE</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
      <a class="nav-link" href="index.php">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>หน้าแรกสรุปยอดขาย</span></a>
    </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      

       <!-- Nav Item - Pages Collapse Menu -->
       <li class="nav-item ">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>ข้อมูลของร้าน</span>
        </a>
        <div id="collapsePages" class="collapse show" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">จัดการหลังร้าน</h6>
            
            <a class="collapse-item" href="menu_list.php">จัดการรายการอาหาร</a>
            <a class="collapse-item " href="data_personal.php">ประวัติส่วนตัว</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
    

     

      <!-- Nav Item - Pages Collapse Menu -->
     

     

      <!-- Nav Item - Tables -->
     <li class="nav-item active">
      <a class="nav-link" href="orders.php">
        <i class="fas fa-fw fa-table"></i>
        <span>จัดการออเดอร์</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item active">
      <a class="nav-link" href="tables_request_withdraw.php">
        <i class="fas fa-fw fa-table"></i>
        <span>ถอนเงิน</span></a>
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

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

       

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            
            

            
            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['name'].' '.$_SESSION['surname']; ?></span>
                <img class="img-profile rounded-circle" src="../pic/kyc/<?php echo $_SESSION['pic_profile'];?>">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="data_personal.php">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  ข้อมูลส่วนตัว
                </a>
                
                <a class="dropdown-item" href="menu_list.php">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  จัดการรายการอาหาร                
                  </a>
                <a class="dropdown-item" href="orders.php">
                  <i class="fas  fa-sm fa-fw mr-2 text-gray-400"></i>
                  จัดการออเดอร์
                </a>
                <a class="dropdown-item" href="tables_request_withdraw.php">
                  <i class="fas  fa-sm fa-fw mr-2 text-gray-400"></i>
                  ถอนเงิน
                </a>


                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>


          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
<form method="get" action="request_withdraw.php" >
          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">ขอการถอนเงิน Withdraw Request</h1>
          <p class="mb-4">จำนวนเงินของคุณที่สามารถถอนได้ คือ <?php echo $_SESSION['balance'];?></a> บาท</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">ตารางคำขอการถอนเงิน</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>

                      <th>ชื่อ-นามสกุล</th>
                      <th>เบอร์โทรศัพท์</th>
                      <th>ธนคาร</th>
                      <th>เลขที่บัญชี</th>
                      <th>จำนวนเงินที่ต้องการถอน</th>
                      <th>ส่งคำขอ</th>
                      
                    </tr>
                  </thead>
                  
                  <tbody>
                    <tr>
                      
                        
                      
                      <td ><input type="text" class="form-control  " name="name" id="" placeholder="" value="<?php echo $_SESSION['name']." ".$_SESSION['surname'];?>" disabled>
                      </td>
                      <td><input type="text" class="form-control col-8 " name="telephone" id="" placeholder="" value="<?php echo $_SESSION['telephone'];?>" disabled>

                      <td>
                        <select class="form-control" name="namebank" id="" required>
                        <option disabled>โปรดเลือกธนาคาร</option>
                          <option>SCB</option>
                          <option>K-BANK</option>
                          <option>Krungthai</option>
                          <option>Krungsri</option>
                          <option>Promptpay</option>
                        </select>
                      </div></td>
                      <td><input type="text" class="form-control  " name="no_account" id="" placeholder="ถ้าเลือกพร้อมเพย์กรุณากรอกเบอร์" required> </td>
                      <td><select type="number" class="form-control" name="amount" id="" required>
                        <option>500</option>
                        <option>1000</option>
                        <option>2000</option>
                        <option>10000</option>
                        <option>15000</option>
                      </select></td>
                      <td><button type="submit" name="submit" class="btn btn-success" href="" role="button">ส่งคำขอ</button></td>
                              
                    </tr>
                    
                  </tbody>
                </table>
</form>

                
              </div>
            </div>
          </div>

        </div>

        <?php
 
 $sql = "SELECT * FROM `request_withdraw` WHERE telephone ='".$_SESSION['telephone']."' ORDER BY `request_withdraw_id` DESC";
          $result = $conn->query($sql);
          
                  if ($result->num_rows > 0) {
        
        ?> 
        
        <!-- /.container-fluid -->
        <div class="container-fluid">
            <!-- DataTales Example -->
         <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">รายการคำขอการถอนเงิน</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>

                      <th>เดือน/วัน/ปี</th>
                      <th>ถอนเงินจำนวน</th>
                      <th>ยอดคงเหลือหลังถอน</th>
                      <th>สถานะการถอน</th>
                      
                      
                    </tr>
                  </thead>
               
                  <tbody>
                  <?php
                     
                     while($row = $result->fetch_assoc() ) {
                       
                     
                      ?>
                    <tr>
                      
                    <th scope="row" name="request_withdraw_id"><?php echo $row["date"]; ?></th>
                    <td id="amount" name="amount" value="<?php echo $row["amount"]; ?>"><?php echo $row["amount"]; ?></td>
                    <td id="balance_least" name="balance_least" value="<?php echo $row["balance_least"]; ?>"><?php echo $row["balance_least"]; ?></td>
                    <?php if($row["status"]=='1') {
                      echo'<td class="text-warning" >รอการอนุมัติ</td>';
                    
                  } 
                        else{  echo'
                          <td class="text-success" >ผ่านการอนุมัติ</td>';}
                  ?>
                    
                     
                    
                      
                      
                      
                      
                              
                    </tr>
                    
                  </tbody>
                  <?php } ?> 
                </table>
                <?php } else {
                          
                        }
                        
                        ?>
                
                </div>
            </div>
          </div>

        </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Eathere final project 2019</span>
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
