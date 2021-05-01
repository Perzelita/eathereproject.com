<!DOCTYPE html>
<html lang="en">
<?php 
require_once('../php_front/authen.php');?>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>EAT HERE Manager orders</title>

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
      

      <!-- Nav Item - Utilities Collapse Menu -->
      

      <!-- Divider -->
     

      <!-- Heading -->
     

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item active">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>ข้อมูลของผู้ขับ</span>
        </a>
        <div id="collapsePages" class="collapse show" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">จัดการผู้ขับ</h6>
            
            <a class="collapse-item " href="data_personal.php">ประวัติส่วนตัว</a>
          </div>
        </div>
      </li>

     

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

          <!-- Topbar Search -->
          

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

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">รายการออเดอร์จากร้านค้าที่ยืนยัน</h1>
          <p class="mb-4">รายการอาหารที่ลูกค้าได้สั่งเข้ามา กรุณาตัดสินใจรับหรือปฏิเสธทันทีที่ได้รับออเดอร์</a>
          </p><p id="time"></p>
          <?php 

          $sql = "SELECT * FROM `order` INNER JOIN order_details ON order.order_id= order_details.order_id  ";
          $result = $conn->query($sql) or die($conn->error)  ;
          $pointer= $result->fetch_assoc();

             $sql2 = "SELECT * FROM `member` WHERE member_id = '".$pointer['partner_id']."' ";
                        $result2 = $conn->query($sql2) or die($conn->error)  ;
                        $sql3 = "SELECT * FROM `member` WHERE member_id = '".$pointer['member_id']."' ";
                        $result3 = $conn->query($sql3) or die($conn->error)  ;
          
                        $read_partner = $result2->fetch_assoc();
                        $read_customer = $result3->fetch_assoc() ;
          
                  if ($result->num_rows > 0) {
                      ?>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">ตารางออเดอร์จากลูกค้า</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                     <th>เดือน/วัน/ปี</th>
                      <th>ออเดอร์ที่</th>
                      <th>ชื่อร้านค้า</th>

                      <th>ชื่อลูกค้า</th>
                      <th>รายการอาหาร</th>
                      <th>รายได้ของออเดอร์นี้</th>
                      
                      <th>ติดต่อลูกค้า</th>
                      
                      <th>รับออเดอร์</th>
                      

                      <th>สถานะ</th>
                      <th>หาพิกัดลูกค้า</th>
                      <th>หาพิกัดร้านค้า</th>


                      <th>ส่งออเดอร์</th>



                    </tr>
                  </thead>
                  <tfoot>
                    <th>เดือน/วัน/ปี</th>
                    <th>ออเดอร์ที่</th>
                    <th>ชื่อร้านค้า</th>
                    <th>ชื่อลูกค้า</th>
                    <th>รายการอาหาร</th>
                    <th>รายได้ของออเดอร์นี้</th>
                    <th>ติดต่อลูกค้า</th>
                   
                    
                    <th>รับออเดอร์</th>
                    
                    <th>สถานะ</th>
                    <th>หาพิกัดลูกค้า</th>
                    <th>หาพิกัดร้านค้า</th>


                    <th>ส่งออเดอร์</th>


                    </tr>
                  </tfoot>
                  <tbody>
                    
                    <?php
                    $num=0;
                       while($read_status = $result->fetch_assoc()) {
                     
                      

                         ?>
                              <tr>
                              <form method="POST" action="accept_decline.php" >
                              <input type="hidden" name="order_id" value="<?php echo$read_status['order_id'];?>">

                              <th scope="read_status"><?php echo $read_status["time"]; ?></th>
                              <td><?php echo $read_status["order_id"]; ?></td>
                              
                              <td><?php echo $read_partner["partner_name"]; ?></td>
                              <input type="hidden" name="partner_name" value="<?php echo$read_partner['partner_name'];?>">
                              <td><?php echo $read_customer["user"]; ?></td>
                              <input type="hidden" name="user" value="<?php echo$read_customer['user'];?>">

                              <td>
                              <?php                    
?>
                              <?php echo $read_status["menu_id"]; echo" "; echo $read_status["menu_name"];echo " จำนวน "; echo$read_status["unit"];echo"<br>"; ?>
                             </td>
                              
                              <td><?php  echo $read_status["deliver_early"]; ?> บาท</td>
                              <input type="hidden" name="total" value="<?php echo$read_status['total'];?>">
                              <input type="hidden" name="deliver_early" value="<?php echo $read_status['deliver_early'];?>">

                              
                              
                              
                              


                      

  <td><a class="btn btn-success" href="tel: <?php echo $read_customer['telephone']?>" role="button">ติดต่อลูกค้า</a></td>
                                                            
  <td>
                      <input type="submit" name="accept" class="btn btn-success"  <?php if($read_status["status_order"]!=2){echo "disabled";}?>  value="รับงาน"></input></td>
                      </td>

                              <td><?php  if($read_status["status_order"]==1){
                                  echo "พิจารณาการรับออเดอร์";
                              } 
                              elseif($read_status["status_order"]==2){
                                echo "รับออเดอร์";

                              }
                              elseif($read_status["status_order"]==3){
                                echo "รับออเดอร์และส่งเอง";

                              }
                              elseif($read_status["status_order"]==4){
                                echo "รอทางคนรับส่งมารับและส่งให้ลูกค้า";

                              }
                              elseif($read_status["status_order"]==5){
                                echo "จัดส่งเรียบร้อย";

                              }
                              else{}
                              
                              ?></td>
                              
                                                            <td><a class="btn btn-info" href="https://www.google.com/maps/search/?api=1&query=<?php print  $read_customer["latitude"] .",".$read_customer["longitude"];?> " role="button" target="_blank">ดูพิกัด</a></td>
                                                            <td><a class="btn btn-info" href="https://www.google.com/maps/search/?api=1&query=<?php print  $read_partner["latitude"] .",".$read_partner["longitude"];?> " role="button" target="_blank">ดูพิกัด</a></td>

                                                            
                                                            <td>
                                                            <input type="submit" name="deliver_done" class="btn btn-info"    value="จัดส่งเรียบร้อย"  <?php if($read_status["status_order"]!=4){echo "disabled";}?> ></input></td>

                    
                                                            <?php }                                                             ?> 

                       </form>  
                            </tr>
                              

                              
                         </tbody>
                         </table>
              
                         <?php } else {
                           echo "ยังไม่มีเมนูรายการเข้ามา";
                        }
                        
                        ?>
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
            <span>Copyright &copy; Eat here final project 2019</span>
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
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="../php_front/signout.php">Logout</a>
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

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript">
var timestamp = '<?=time();?>';
function updateTime(){
  $('#time').html(Date(timestamp));
  timestamp++;
}
$(function(){
  setInterval(updateTime, 1000);
});
</script>

</body>

</html>
