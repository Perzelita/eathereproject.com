<!DOCTYPE html>
<html lang="en">
<?php require_once('../php_front/authen.php');?>

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>EAT HERE Manager Menu</title>

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

     

      <!-- Nav Item - Pages Collapse Menu -->
      

      <!-- Nav Item - Utilities Collapse Menu -->
     

     

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item active">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>ข้อมูลของร้าน</span>
        </a>
        <div id="collapsePages" class="collapse show" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">จัดการหลังร้าน</h6>
            
            <a class="collapse-item active" href="menu_list.php">จัดการรายการอาหาร</a>
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


</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>

<!-- /.container-fluid -->

<div class="container-fluid  ">
<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">เพิ่มอาหาร</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
  <h1 class="h3 mb-4 text-gray-800 mr">จัดการเมนูอาหาร</h1>
  <h1 class="h5 mb-4 text-gray-800 mr">เพื่มเมนูอาหาร</h1>
  <div class="table-responsive card-body ">
  <table class="table  table-bordered  " id="btnAdd" width="100%" cellspacing="0">
    <thead class="">
      <tr id="TheadMenu">
        
        <th scope="col">#</th>
        <th scope="col" >ชื่อเมนู</th>
        <th scope="col">ราคา/หน่วย บาทไทย</th>
        <th scope="col">สถานะเมนู</th>
      </tr>
    </thead>

    <tbody>
      <form method="GET" action="./add_menulist.php" enctype="multipart/form-data" >
      <input type="hidden" id="count" name="count" value="">
      <tr id="TheadMenuII">
        
        <th scope="row">
        <td><div class="form-group my-auto "><input type="text" class="form-control" name="menu" id=""  placeholder=""></div></td>
        <td><div class="form-group my-auto "><input type="text" class="form-control" name="price" id=""  placeholder=""></div></td>
        <td><div class="form-check form-check-inline "><label class="form-check-label" for="radio1"><input class="form-check-input " type="radio" name="avalable" id="" value="1" Checked> จำหน่าย</label><label class="form-check-label ml-3 mr-auto" for="radio2"><input class="form-check-input " type="radio" name="avalable" id="" value="0"> ไม่พร้อมจำหน่าย</label></div></td>

      </th>
      </tr>
      
      </tbody>
    </table>
    <div class="float-right col-md-3">
      
        <input type="submit" class="form-control bg-primary text-white btn-lg  " name="add_submit" id="addmenu" placeholder="" value="ยืนยัน">
      
    </div>
    <div class="float-right col-md-2">
            
      <input type="hidden" class="form-control bg-primary text-white btn-lg   " name="" id="btnAddCol" ></input>
    </div>
</div>
</div>
</div>
  </form>
    <script>
      var rows=1;
      var i=1;
     $("#btnAddCol").click( function ()  {
      var row = $("<tr>");
        
        row.append($('<td>'+i+'</td>'))
           .append($('<td><div class="form-group my-auto "><input type="text" class="form-control" name="menu['+i+']" id=""  placeholder=""></div></td>'))
           .append($('<td><div class="form-group my-auto "><input type="text" class="form-control" name="price['+i+']" id=""  placeholder=""></div></td>'))
           .append($('<td><div class="form-check form-check-inline "><label class="form-check-label" for="radio1"><input class="form-check-input " type="radio" name="avalable['+i+']" id="" value="1" Checked> จำหน่าย</label><label class="form-check-label ml-3 mr-auto" for="radio2"><input class="form-check-input " type="radio" name="avalable['+i+']" id="" value="2"> ไม่พร้อมจำหน่าย</label></div></td>'));
          
           $("#btnAdd tbody").append(row);
           $('#count').val(rows);
           $('#i').val(i);
						rows++;
            i++;
            var x = document.getElementById("radio");
  x.checked = true;
          });

          $(document).ready(function(){
    $('#TextBoxId').keypress(function(e){
      if(e.keyCode==13)
      $('#addmenu').click();
    
    })
          );

    </script>



<form method="POST" action="change_menu.php">
<div class="container-fluid  ">
<div class="card shadow ">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">จัดการอาหาร</h6>
            </div>
            <div class="card-body">
             
 
  
  <h1 class="h5 mb-4 text-gray-800 mr  ">รายการอาหาร</h1>
  <div class="table-responsive">
  <table class="table table-striped  table-bordered ">
    <thead class="">
      <tr>
        
        <th scope="col">รายการเมนูที่</th>
        <th scope="col" >ชื่อเมนู</th>
        <th scope="col">ราคา/หน่วย บาทไทย</th>
        <th scope="col">สถานะเมนู</th>
        <th scope="col">ลบเมนู</th>
      </tr>
    </thead>
    <tbody>
    <?php $sql = "SELECT * FROM `menu` WHERE partner_id_fk = '".$_SESSION['member_id']."' ORDER BY `menu`.`menu_id` DESC ";
          $result = $conn->query($sql) or die($conn->error)  ;
          
if ($result->num_rows > 0 ) {                     
                    $num=0;
                    while($row = $result->fetch_assoc()) { 
                      $num ++;
                      ?>
      <tr>
      <input type="hidden" class="form-control" name="menu_id[]" id="" aria-describedby="helpId" value="<?php echo $row["menu_id"]; ?>" >

        <th scope="row"><?php echo $num; ?></th>
        <td>
          <div class="form-group my-auto ">

          <input type="text" class="form-control" name="menu[]" id="" aria-describedby="helpId" value="<?php echo $row["menu_name"]; ?>" >
        </div>
      </td>
        <td><div class="form-group my-auto ">
          
          <input type="text" class="form-control " name="price[]" id="" aria-describedby="helpId" value="<?php echo $row["price"]; ?>">
        </div>
      </td>
        <td>
          <div class="form-check form-check-inline ">
            <label class="form-check-label" for="radio1">
              <input class="form-check-input " type="checkbox" name="avalable[]" id="avalable[]" value="1" <?php if($row["avalable"] =="1"){ echo "checked"; }?>> จำหน่าย
              <input class="form-check-input " type="hidden" name="avalable[]" id="avalableHidden[]" value="0" <?php if($row["avalable"] =="0"){ echo ""; }?> > 

            </label>
            
          </div>
        </td>
        
        <td>
          <div class="form-check form-check-inline">
            <label class="form-check-label">
              <input class="form-check-input " type="checkbox" name="CheckAllDel[]" id="" value="<?php echo $row["menu_id"]; ?>"> ลบเมนู
              
            </label>
          </div>
        </td>
      </tr>
      <?php } ?> 
        <?php } else {
                           echo "ไม่มีรายการอาหาร";
                        }
                        
                        ?>
                <tr>
                  <th scope="row "></th>
                  <td>
                    <div class="form-group my-auto ">
                  
                      <input type="hidden" class="form-control " name="" id=""  placeholder="">
                    </div>
                </td>
                  <td>
                    <div class="form-group my-auto ">
                  
                      <input type="hidden" class="form-control " name="" id=""  placeholder="">
                      
                    </div>
                </td>
                
                  <td>
                   
                  </td>
                  <td>
                    <div class="form-check form-check-inline">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="" id="" value="" onClick="toggle_del(this)"> เลือกลบทั้งหมด
                      </label>
                    </div>
                  </td>
                </tr>
                <tr class="bg-light">
                  <th scope="row "></th>
                  <td>
                    
                </td>
                  <td>
                    
                  
                      
                </td>
                
                  <td>
                    <div class="form-group my-auto ">
                      <input type="submit" class="form-control bg-primary text-white btn-lg " name="submit_edit" id="" placeholder="" value="ยืนยันการแก้ไข">
                    </div>
                       
                     </td>
                     <td>
                      <div class="form-group my-auto ">
                        <input type="submit" class="form-control bg-primary text-white btn-lg " name="submit_del" id="" placeholder="" value="ยืนยันการลบ">
                      </div>
                         
                       </td>
                </tr>
                
                     
                
                
                
       
    </tbody>
</form>  
   
  </table>
  <script language="JavaScript">

  if(document.getElementById("avalable[]").checked) {
    document.getElementById("avalableHidden[]").disabled = true;
}

    function toggle(source) {
 checkboxes = document.getElementsByName('CheckAll');
 for(var i=0, n=checkboxes.length;i<n;i++) {
   checkboxes[i].checked = source.checked;
 }
}
function toggle_del(source) {
 checkboxes = document.getElementsByName('CheckAllDel[]');
 for(var i=0, n=checkboxes.length;i<n;i++) {
   checkboxes[i].checked = source.checked;
   $('#count').val(i);
 }
}
     </script>

</div>
</div>
</div>
</div>

      <!-- End of Main Content -->

      <!-- Footer -->
       <!-- Footer -->
       <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Eat here final project 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

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
