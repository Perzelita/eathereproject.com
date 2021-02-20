<?php
require_once(  '../section/head.php');
require_once( '../section/header-navbar-modal.php');
require_once('../php_cruid/connect_DB.php');
date_default_timezone_set("Asia/Bangkok");
if (isset($_SESSION['telephone'])){  
$readcart="SELECT* FROM cart_temp WHERE member_id= '".$_SESSION['member_id']."';";
$result_read= $conn->query($readcart) or die ($conn->error);  
$row_read = $result_read->fetch_assoc();
$id = $row_read['partner_id'];
if ($row_read['total'] !=0){

$read_restaurant = "SELECT * FROM member INNER JOIN partner_avalable ON member.member_id = partner_avalable.partner_id_fk
WHERE member.member_id = '".$id."' AND member.status_member = 'partner'  ;";
$result = $conn->query($read_restaurant)  or die($conn->error);
$row_read_status = mysqli_fetch_array($result, MYSQLI_ASSOC);



?>

                    <div class="container mt-3 justify-content-center  ">
                        <div class="row ">
                            
                    <div class="col-sm-12">

                    <form method="GET" action="request_order.php" >

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
                                    if ($result_read->num_rows > 0){

                                    while($row = $result_read->fetch_assoc() ) {

                                    ?>
                                     


                                        <div class="row ">
                                                <div class="col-6"><?php echo $row['menu_name'];?></div>
                                                <div class="col-3">X<?php echo $row['unit'];?> </div>
                                                <div class="col-3">
                                                <?php echo $row['total'];
                                                }}?> บาท                        
                                                </div>
                                                </div>


                                      <input class="form-control disabled" name="menu_total[]" id="menu_total" type="hidden"  value="<?php echo $row_read['price'];?>" >


                                      <input class="in-price" type="hidden" name="m_id[]"  id="menu_name" value="<?php echo $row_read['menu_id'];?>">

<input class="in-price" type="hidden" name="m_name[]"  id="menu_name" value="<?php echo$row_read['menu_name'];?>">
<input class="in-price" type="hidden" name="m_p_d[]"  id="price_def" value="<?php echo $row_read['price'];?>">
<input class="in-price" type="hidden" name="m_unit[]"  id="unit" value="<?php echo $row_read['unit'];?>">

<input class="form-control disabled" name="m_t[]" id="menu_total" type="hidden"  value="<?php echo $row_read['total'];?>">
                                            
                                    <?php 

                              /*   $readcart="SELECT* FROM cart_temp WHERE member_id= '".$_SESSION['member_id']."' AND partner_id= '".$id."';";
                                 $result_read= $conn->query($readcart) or die ($conn->error);  
                                 $row_read = mysqli_fetch_array($result_read, MYSQLI_ASSOC);


                                               if( !$row_read  ){
                                                 */
                                            
                                              /*
                                               }
                                               else{

                                               }
                                            */
                                            ?>
                                            
                                            
                                           
                                              <div class="row mt-3">
                                                    <div class="col-6">ยอดรวม</div>
                                                    <div class="col-3"></div>
                                                    <div class="col-3">
                                                    <?php echo $row_read['total'];?> บาท     </div>                                             
                                                    

                                                
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
                                               <?php echo $row_read['total'];?> บาท        </div> 
                                               <input class="form-control disabled" name="menu_total" id="menu_total" type="hidden"  value="<?php echo $row_read['total'];?>" >
                                            
                                      </div>
                                               <div class="row mt-3">
                                                <div class="col-6">คงเหลือ</div>
                                                <div class="col-3"></div>
                                                <div class="col-3">
                                                <?php  $change =(int)$_SESSION['balance']-(int)$row_read['total'];
                                                if($change>=0){echo $change =(int)$_SESSION['balance']-(int)$row_read['total']; }else{echo"จำนวนเงินไม่พอสั่งซื้อ";}   ?> บาท       </div>        
                                      </div>
                                      <input type="hidden" name="change" value="<?php echo $change =(int)$_SESSION['balance']-(int)$row_read['total']; ?>" >
                                      <input type="hidden" name="partner_id" value="<?php echo $row_read_status['member_id'] ?>" >

                                      <input type="hidden" name="time_estimate" value="<?php  echo (new DateTime('+30 minutes'))
                                 ->format('H:i');?> - <?php echo (new DateTime('+90 minutes'))
                                 ->format('H:i')?>" >
                                      <input type="hidden" name="time_order" value="<?php echo (new DateTime())->format('d:m:Y H:i');?>" >

                                      <input type="hidden" name="status_order" value="1" >
                                      <input type="hidden" name="member_id" value="<?php echo $_SESSION['member_id'] ?>" >
                                      <input type="hidden" name="cus_name" value="<?php echo $_SESSION['user'];?>" >
                                      <input type="hidden" name="total" value="<?php echo $row_read['total']?>" >
                                      <input type="hidden" name="early" value="<?php echo $early = (int)$row_read['total']*85/100;?>" >
                                      <input type="hidden" name="deliver_early" value="<?php echo $deliver_early = (int)$row_read['total']*15/100;?>" >

                                              

                                                

                                        
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
                                               
                                              
 ?> 

                                                <p class="lead">วันที่ <?php echo (new DateTime('+30 minutes'))
                                 ->format('d-m-Y H:i');?> ถึง <?php echo (new DateTime('+90 minutes'))
                                 ->format('H:i');?>โดยประมาณ</p>
                                                <hr class="my-2">
                                                <p>เวลาเปิดร้าน </p>
                                                <p class="lead ">
                                                        <select class="form-control  rounded border border-secondary  border-secondary"  id="sel1"  >
                                                                <option disabled>โปรดเลือกเวลาในการจัดส่งสินค้า</option>
                                                                  <option><?php echo $row_read_status['open_order'];
                                                                  ?></option>
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
                                        
                                        <input type="text" name="note" class="form-control-lg rounded border border-secondary text-black-50  " placeholder="ํNote to driver" aria-label="" aria-describedby="basic-addon2">

                                      </div>
                                      
                                                                        
                                    
                                      
                                      
                                  
                                </div>
        
                            </div>
                        </div>

                    </div>
                        </div>
                    </div>
<?php if ($row_read_status['status']='open'){?>
<footer class="fixed-bottom">
                    <div id="footer">
                            <div class="container ">
        

                                
                                <input type="submit" name="submit" id="" class="btn btn-primary footer-block w-100 sticky-top text-white colorbtn  " 
                                role="button" style="padding-top: 1em; padding-bottom: 1em;" value="ยืนยันการสั่งซื้อ"
                                >
                                
        
                                
        
                              </input>
        
                            </div>
        
                          </div>

                        </footer>
                        </form>   

 <script>
 $( function() {
   $( "#datepicker" ).datepicker();
 } );
 </script>
  </body>
  <?php }elseif  ($row_read_status['status']='close'){ ?>
    <footer class="fixed-bottom">
                    <div id="footer">
                            <div class="container ">
        

                                
                                <input  name="" id="" class="btn btn-dark footer-block w-100 sticky-top text-white black-background  disabled" 
                                role="button" style="padding-top: 1em; padding-bottom: 1em;" value="ร้านปิด"
                                >
                                
        
                                
        
                              </input>
        
                            </div>
        
                          </div>

                        </footer>
                     
 <?php }
  
  
  
  
  require_once('../section/script.php'); }
  else{
    echo'<script>alert("โปรดเลือกสินค้าในร้านค้า");</script>';
    echo'<script>        window.history.back();
    </script>';


  }
}
else{
  echo'<script>alert("โปรดเข้าสู่ระบบ");</script>';
}
?>

</html>