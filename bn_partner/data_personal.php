<!DOCTYPE html>
<html lang="en">
<?php 

require_once('../php_front/authen.php');



?>

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>EAT HERE Profile</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

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

      

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item active">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>ข้อมูลของร้าน</span>
        </a>
        <div id="collapsePages" class="collapse show" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">จัดการหลังร้าน</h6>
            
            <a class="collapse-item" href="menu_list.php">จัดการรายการอาหาร</a>
            <a class="collapse-item active" href="data_personal.php">ประวัติส่วนตัว</a>
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

         

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            

           

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
 <!-- Page Heading -->
 <h1 class="h3 mb-4 text-gray-800 mr">ข้อมูลส่วนตัว Data Personer</h1>
 

</div>
<!-- /.container-fluid -->
<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>" enctype="multipart/form-data">
<div class="container fluid">
<div class="card shadow mb-4">
            <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">ประวัติเจ้าของร้านและร้านค้า<span>
            <h6 class="m-0 font-weight-bold text-primary float-right">แก้ไขข้อมูลล่าสุดเมื่อ <?php echo $_SESSION['updated'];?></h6></span></h6>
            
            <div class="card-body">
                                
        <div class="form-row">
          <div class="col-md-3 mb-3">
            <label for="">ชื่อ</label>
            <input type="text" class="form-control" id="" name="name" placeholder="ชื่อ" value="<?php echo $_SESSION['name']; ?>  " readonly>
            
          </div>
          <div class="col-md-3 mb-3">
            <label for="">นามสกุล</label>
            <input type="text" class="form-control" id=""  name="surname" placeholder="นามสกุล" value="<?php echo $_SESSION['surname']; ?>  " readonly>
            
          </div>
          <div class="col-md-3 mb-3">
            <label for="Username">ชื่อที่ใช้แสดง</label>
            <div class="input-group">
                <input type="text" class="form-control" id="" name="user" placeholder="ชื่อที่ใช้แสดง" value="<?php echo $_SESSION['user']; ?>  " readonly>
              
            </div>
          </div>
        </div>
        <div class="form-row">
               
                <div class="col-md-3 mb-3">
                  <label for="">รหัสบัตรประชาชน13หลัก</label>
                  <input type="text" class="form-control" id="citizen_id" name="citizen_id" placeholder="รหัสบัตรประชาชน13หลัก" mask="0-0-000-00-000-00-0" value="<?php echo $_SESSION['citizen_id']; ?>  " readonly>
                </div>
                                                                         

                <div class="col-md-2 mb-3">
                  <label for="">วัน/เดือน/ปี เกิด</label>
                  <input type="date" class="form-control validate" name="birthday" id="" placeholder="วัน/เดือน/ปี เกิด" value="<?php echo $_SESSION['birthday']; ?>  " readonly>
                </div>

                <div class="col-md-3 mb-3">
                  <label for="">อีเมลล์</label>
                  <input type="email" class="form-control validate" name="email"  placeholder="อีเมลล์" value="<?php echo $_SESSION['email']; ?>  " readonly>
                </div>
                
                <div class="col-md-2 mb-3">
                  <label for="">เบอร์โทรศัพท์</label>
                  <input type="text" class="form-control validate" name="telephone" id="telephone" placeholder="เบอร์โทรศัพท์" value="<?php echo $_SESSION['telephone']; ?>  " readonly>
                </div>

                                
              </div>
              <div class="form-row">
                <div class="col-md-4 mb-6">
                  <label for="">ที่อยู่ บ้านเลขที่ ถนน/ซอย</label>
                  <input type="text" class="form-control" id="" name="no_address" placeholder="Address" value="<?php echo $_SESSION['no_address']; ?>  " readonly>
                </div>
               
                <div class="col-md-3 mb-3 ">
                  <label for="">ตำบล</label>
                  <input type="text" class="form-control " id="" name="district" placeholder="ตำบล" value="<?php echo $_SESSION['district']; ?>  " readonly>
                </div>
              </div>
              <div class="form-row">
            
                <div class="col-md-3 mb-3">
                  <label for="">อำเภอ</label>
                  <input type="text" class="form-control " id="" name="amphoe" placeholder="อำเภอ" value="<?php echo $_SESSION['amphoe']; ?>  " readonly>
                  
                </div>
                <div class="col-md-3 mb-3">
                <label for="">จังหวัด</label>
                  <input type="text" class="form-control " id="" name="province" placeholder="จังหวัด" value="<?php echo $_SESSION['province']; ?>  " readonly>
                </div>

                <div class="col-md-2 mb-3">
                  <label for="">รหัสไปรษณีย์</label>
                    <input type="text" class="form-control " id="" name="zipcode" placeholder="รหัสไปรษณีย์" value="<?php echo $_SESSION['zipcode']; ?>  " readonly>
                  </div>
                                 

              </div>
              <div class="form-row">
              <div class="col-md-3 mb-3">
                        <label for="">โค้ดที่อยู่จาก Google map พิกัด X</label>
                        <input type="text" class="form-control " id="Latitude" name="latitude" value="<?php echo $_SESSION['latitude']; ?>  " readonly>
                        
                        
                      </div>
                      <div class="col-md-3 mb-3">
                        <label for="">โค้ดที่อยู่จาก Google mapพิกัด Y</label>
                        <input type="text" class="form-control " id="Longitude" name="longitude"  value="<?php echo $_SESSION['longitude']; ?>  " readonly> 
                        
                        
                      </div>
                      <div class="col-md-2 mb-3">
                        <label for="">เช็คจุดตำแหน่งที่ตั้งร้าน</label>
                        <a class="btn btn-primary colorbtn "  role="button" href="https://www.google.com/maps/search/?api=1&query=<?php print  $_SESSION["latitude"] .",".$_SESSION["longitude"];?> " role="button" target="_blank">ดูพิกัด</a>
                      </div>
              </div>
             
              <div class="form-row">
                <div class="col-md-4 mb-2 ">
                  <h5>สำหรับรายละเอียดของร้าน</h5>
                </div>
              </div>
              
              <div class="form-row">
              <div class="col-md-3 mb-3">
                  <label for="">ชื่อร้าน</label>
                 <input type="text" class="form-control" id="" name="partner_name" value="<?php echo $_SESSION['partner_name']; ?>  " placeholder="ชื่อร้าน" >
              </div>

              <div class="col-md-3 mb-3">
                  <label for="">ประเภทของอาหาร</label>
                 
                   <select class="form-control" name="food_type" id="food_type" value="">
                     <option value="อาหารคาว" <?php  if($_SESSION['food_type']=="อาหารคาว") echo'selected="selected"'; ?>>อาหารคาว</option>
                     <option value="อาหารหวาน"<?php  if($_SESSION['food_type']=="อาหารหวาน") echo'selected="selected"'; ?>>อาหารหวาน</option>
                     <option value="อาหารคาวและอาหารหวาน" <?php if($_SESSION['food_type']=="อาหารคาวและอาหารหวาน") echo'selected="selected"'; ?>>อาหารคาว และ อาหารหวาน</option>
                   </select>
                    </div>
              <div class="col-md-2 mb-2">
                  <label for="">เวลาเปิดร้าน</label>
                 <input type="text" class="form-control" id="open_order" name="open_order" placeholder="ตัวอย่าง : 14" value="<?php echo $_SESSION['open_order']; ?>  " >
              </div>
              <div class="col-md-2 mb-2">
              <label for="">เวลาปิดร้าน</label>
                 <input type="text" class="form-control" id="close_order" name="close_order" placeholder="ตัวอย่าง : 21" value="<?php echo $_SESSION['close_order']; ?>  " >
                </div>
                
                </div>
               
                
                <div class="from-row">
                    <div class="col-md-4 mb-3">
                        <label for="">ประวัติของร้านโดยสังเขป</label>
                           <textarea type="text" class="form-control" id="" name="bio" <?php echo $_SESSION['bio']; ?> ></textarea>
                    </div>
                           <div class="col-md-2 ">
                             
                            <input type="submit" class="btn bg-primary text-white " id="" name="edit_submit" value="แก้ไขข้อมูล" role="button" ></input>
                          </div>
                      
                    </div>
                  </div>
                  
                     
                  
                
              </div>
              

              </form>        

      </div>
</div>
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

</div>

    </div>
    


    <?php 
    if (isset($_POST['edit_submit'])) {
      
        $edit_personal="UPDATE `member` 
        SET `partner_name` = '".$_POST['partner_name']."',
         `food_type` = '".$_POST['food_type']."',
         `open_order` = '".$_POST['open_order']."',
         `close_order` = '".$_POST['close_order']."',
         `bio` = '".$_POST['bio']."',
         `updated`='".date("Y-m-d H:i")."'

        WHERE member_id = '".$_SESSION['member_id']."' AND status_member = 'partner' " ;
        $edited = $conn->query($edit_personal) or die ($conn->error);
        
         if($edited){
          $_SESSION['partner_name'] =  $_POST['partner_name'];
          $_SESSION['food_type'] =  $_POST['food_type'];
          $_SESSION['open_order'] =  $_POST['open_order'];
          $_SESSION['close_order'] =  $_POST['close_order'];
          $_SESSION['bio'] =  $_POST['bio'];
          $_SESSION['updated'] =  date("Y-m-d H:i");
          echo '<script> alert ("แก้ไขข้อมูลสำเร็จ") </script>';
          echo '<script>  window.history.go(-1);</script>';
        }
         
         else{}
         
      }
     
   
    
    ?>
      <!-- End of Main Content -->

      <!-- Footer -->
      
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

</body>

</html>
