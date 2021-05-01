<?php

require_once(  '../section/head.php');
require_once( '../section/header-navbar-modal.php');
require_once('../php_cruid/connect_DB.php');
date_default_timezone_set("Asia/Bangkok");
error_reporting(E_ALL);

$id = $_REQUEST['id'];

$read_restaurant = "SELECT * FROM member 
WHERE member_id = '".$id."' AND status_member = 'partner'  ;";
$result = $conn->query($read_restaurant)  or die($conn->error);
error_reporting(E_ALL);

?>

<?if (isset($_REQUEST['cart']) && $_SESSION['telephone']){
 
?>
      


                    <div class="container mt-3 justify-content-center  ">
                        <div class="row ">
                            
                    <div class="col-sm-12">

                        

                        <div class="row">

                                <div class="col-12 col-sm-4 ">
                            
                                        <div class="jumbotron bg-transparent shadow-sm">
                                                <h1 class="h3">กระเป๋าส่วนตัว</h1>
                                                <p class="lead display-4"><?php echo $_SESSION['balance'];?> บาท</p>
                                                <hr class="my-2">
                                                
                                                <p class="lead">
                                                    <a class="btn btn-primary btn-lg text-white colorbtn" href="Jumbo action link" data-toggle="modal" data-target="#modalTopUpForm" role="button">เพื่มเงินในกระเป๋า</a>
                                                </p>
                                            </div>
                                        
        
                                </div>
                            <div class="col-12 col-sm-8">
        
                                <div class="jumbotron lead bg-transparent shadow-sm">
                                        <h4>รายการที่สั่ง</h4><br>
                                    <?php    
                                    $totaly=0;
                                     foreach ($_REQUEST['price'] as $row => $value) { ?>
                                      <input class="in-price" type="hidden" name="menu_id[]"  id="menu_id" value="<?php echo $_REQUEST['menu_id'][$row];?>">
                                      <input class="in-price" type="hidden" name="menu_name[]"  id="menu_name" value="<?php echo $_REQUEST['menu_name'][$row];?>">
                                      <input class="in-price" type="hidden" name="price[]"  id="price" value="<?php echo $_REQUEST['unit'][$row];?>">
                                      <input class="in-price" type="hidden" name="price_def[]"  id="price_def" value="<?php echo $_REQUEST['price_def'][$row];?>">
                                      <input class="form-control disabled" name="menu_total[]" id="menu_total" type="hidden"  value="<?php echo $_REQUEST['total'][$row];?>" >
                                      


                                      <?php if ($_REQUEST['qty'][$row] >0) { ?>
                                        <div class="row ">
                                                <div class="col-6"><?php echo $_REQUEST['menu_name'][$row];?></div>
                                                <div class="col-3"><?php echo $_REQUEST['qty'][$row];?> </div>
                                                <div class="col-3">
                                                <?php echo $_REQUEST['menu_total'][$row];
                                                ?> บาท                        
                                                </div>

                                            
                                              </div>
                                              <?php }}?>
                                              <div class="row mt-3">
                                                    <div class="col-6">ยอดรวม</div>
                                                    <div class="col-3"></div>
                                                    <div class="col-3">
                                                    <?php echo $_REQUEST['total'];?> บาท     </div>                                             
                                                    

                                                
                                                    <div class="col-6">ค่าจัดส่ง</div>
                                                    <div class="col-3"></div>
                                                    <div class="col-3">
                                                          0 บาท                                           
                                                    </div>

                                                    

                                            
                                          </div>


                                          <div class="row mt-3">
                                                <div class="col-6">ยอดรวมทั้งหมด</div>
                                                <div class="col-3"></div>
                                                <div class="col-3">
                                               <?php echo $_REQUEST['total'];?> บาท        </div>                                             
                                      </div>
                                               <div class="row mt-3">
                                                <div class="col-6">คงเหลือ</div>
                                                <div class="col-3"></div>
                                                <div class="col-3">
                                                <?php echo $change =(int)$_SESSION['balance']-(int)$_REQUEST['total'];   ?> บาท       </div>        
                                      </div>
                                      <input type="hidden" name="change" value="<?php $change =(int)$_SESSION['balance']-(int)$_REQUEST['total'];   ?> ">                             
                                              

                                                

                                        
                                      </div>
                                              </div>

                                              


                                                
                                                  
                                    
                                              
                                </div>
        
                            </div>
                        </div>


                        <div class="row">

                                <div class="col-12 col-sm-4 ">
                                        <div class="jumbotron bg-transparent shadow-sm">
                                                <h1 class="h3">เวลาในการจัดส่ง</h1>
                                               <?php
                                               
                                              
while($row = $result->fetch_assoc()) { ?> 

                                                <p class="lead">วันนี้และเวลาโดยประมาณ <?php echo (new DateTime('+30 minutes'))
                                 ->format('d-m-Y H:i');?> - <?php echo (new DateTime('+90 minutes'))
                                 ->format('H:i');?></p>
                                                <hr class="my-2">
                                                <p>เวลาเปิดรับออเดอร์ </p>
                                                <p class="lead ">
                                                        <select class="form-control  rounded border border-secondary  border-secondary"  id="sel1"  >
                                                                <option disabled></option>
                                                                  <option><?php echo $row['open_order'];
                                                                  }?></option>
                                                              </select>
                                                </p>
                                            </div>
                                        
        
                                </div>
                            <div class="col-12 col-sm-8">
        
                                <div class="jumbotron bg-transparent shadow-sm">
                                    <h1 class="h3">รายละเอียดการจัดส่ง</h1>
                                    <div class="p mr-auto float-right" href="#" data-toggle="modal" data-target="#modalEditForm">แก้ไขที่อยู่</div>

                                    <br>
                                    <div class="row">
                                        
                                    </div>
                                    <span class="lead"><?php echo $_SESSION['user'];?></span>
                                    <p class="lead">ที่อยู่ <?php echo $_SESSION['no_address'];?></p>
                                    <span class="lead">ตำบล <?php echo $_SESSION['district'];?> </span>
                                    <span class="lead">อำเภอ <?php echo $_SESSION['amphoe'];?> </span>
                                    <span class="lead">จังหวัด <?php echo $_SESSION['province'];?> </span>
                                    <span class="lead"> <?php echo $_SESSION['zipcode'];?> </span>
                                    <p class="lead">เบอร์โทรศัพท์ <?php echo $_SESSION['telephone'];?></p>


                                    <h5 class="my-2" >
                                    ระบุเพิ่มเติม
                                    

                                    <div class="row justify-content-center">
                                      <div class="col-12 mb-3 ">
                                        
                                        <input type="text" class="form-control-lg rounded border border-secondary text-black-50  " placeholder="ํNote to driver" aria-label="" aria-describedby="basic-addon2">

                                      </div>
                                      
                                                                        
                                    
                                      
                                      
                                  
                                </div>
        
                            </div>
                        </div>

                    </div>
                        </div>
                    </div>

<footer class="fixed-bottom">
                    <div id="footer">
                            <div class="container ">
        
        
                              
                                <a name="่" id="" class="btn btn-primary footer-block w-100 sticky-top text-white colorbtn " 
                                href="../html/cart-completed.html" role="button" style="padding-top: 1em; padding-bottom: 1em;"
                                >
                                  <div class="lead " >ยืนยันการสั่งซื้อ</div>
                                
        
                                
        
                              </a>
        
                            </div>
        
                          </div>

                        </footer>
<php } ?>
 <script>
 $( function() {
   $( "#datepicker" ).datepicker();
 } );
 </script>
  </body>
  <?php require_once('../section/script.php'); ?>

</html>