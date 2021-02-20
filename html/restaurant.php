<?php

require_once(  '../section/head.php');
require_once( '../section/header-navbar-modal.php');
require_once('../php_cruid/connect_DB.php');
$id = $_GET['member_id'];
$read_restaurant = "SELECT * FROM member 
 WHERE member_id = '".$id."' AND status_member = 'partner'  ;";
$result = $conn->query($read_restaurant)  or die($conn->error);

$read_row ="SELECT * FROM temp_price ";
$result_row = $conn->query($read_row)  or die($conn->error);
$temp_r = mysqli_fetch_array($result_row, MYSQLI_ASSOC);




while($row = $result->fetch_assoc()) { ?> 





                    <div class="container-fluid mt-3 mb-3 ">
                        <div class="row justify-content-center ">
                          
                              
                                  
                              <form class="form-inline">
                                  
                                
                                  
                                  
                                    </div>
                              
                              
                        </form>
                   
                    

                  </div>
                  
                  
                  <div class="jumbotron jumbotron-fluid mt-3 mb-3 section p-0 shadow "  >
                    
                    <a href="" data-toggle="modal" data-target="#modalDetailResForm">
                        <img src="../pic/kyc/<?php echo $row['pic_cover'];?>" alt="" style="height: 480px; width: 100%;   object-fit: cover; ">
                      </a>
                  </div>

                  <div class="jumbotron jumbotron mb-3 bg-transparent shadow-sm " style="padding-top:0.75em; padding-bottom: 0.75em; ">
                      <div class="container " >
                        
                          <div class="row  " >
                         <ul class="list-inline align-items-baseline">
                            <li class="list-inline-item "><h3><?php echo $row['partner_name'];?></h3></li>
                          <li class="list-inline-item "> &NonBreakingSpace;  </li> 
                          <li class="list-inline-item "> ประเภทของอาหาร  </li> 
                          <li class="list-inline-item "> &NonBreakingSpace;  </li> 

                          <li class="list-inline-item "><h5><?php echo $row['food_type'];?></h5></li>
                          <li class="list-inline-item "> &NonBreakingSpace;  </li>
                          
                          
                        </ul>
                        
                        </div>
                      </div>
                    </div>
                  
                  <div class="container-fluid  mb-3  " >
                      <div class="row justify-content-center ">
                      <form class="form-inline ">
                       
                            <div class="form-group  my-2 lead align-items-baseline" > 
                              <h5>
                                <label for="sel1" >เวลาเปิดร้าน &nbsp </label>
                              </h5>
                                <select class="form-control  rounded border border-secondary  border-secondary "  id="timedelivery"  >
                                  <option disabled>โปรดเลือกเวลาในการจัดส่งสินค้า</option>
                                  <option><?php echo $row["open_order"];?></option>
                                  
                                </select>
                              </div>
                        
                      </form>                 

                      </div>
                </div>
                <div class="jumbotron jumbotron mb-3 bg-transparent shadow-sm  " style="padding-top:1.25em; padding-bottom: 1.25em; "> 
                    <div class="container">
                        
                          <div class="row justify-content-left">
                            <div class="col-5">รายการอาหาร</div>
                            <div class="col-1">ราคา</div>
                            
                            <div class="col-3">
                            จำนวน
                               
                            </div>
                            <div class="col-2">ราคารวม</div>
                          </div>
                      </div>
                  </div>



                  <modal2>
                          <div class="modal fade" id="modalDetailResForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                          aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header text-center  ">
                                <h4 class="modal-title w-100 h5 "><?echo $row['partner_name'];?></h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body mx-1 ">
                                <div class=" mb-1">
                                  <h3>ที่อยู่ของร้าน</h3>
                                  
                                  
                                  
                                  <div class="modal-body mx-1 ">
                                          <div class="  ">
                                            <p class="  prefix dark-text" >
                                              <span><?php echo $row['partner_name'];?> &NonBreakingSpace;</span>
                                              <span><?php echo $row['no_address'];?> &NonBreakingSpace;</span>


                                              <span>ตำบล &NonBreakingSpace;</span>
                                              <span><?php echo $row['district'];?> &NonBreakingSpace;</span>

                                              <span>อำเภอ &NonBreakingSpace;</span>
                                              <span><?php echo $row['amphoe'];?> &NonBreakingSpace;</span>

                                              <span><?php echo $row['province'];?> &NonBreakingSpace;</span><br>

                                              <span><?php echo $row['zipcode'];?> &NonBreakingSpace;</span>

                                            </h5>

                                           
                                                <h5>ประเภทของร้าน</h5>                         
                                                <p class="">ปรเภทอาหาร : <span > <?php echo $row['food_type'];?>  </span>
              

                                                <h5 class=" "> ประวัติของร้าน :</h5> 
                                                <span> &NonBreakingSpace;</span>

                          <span class=" ">   </span> 
                          <span class=" "><?php echo $row['bio'];?></span>
      
                                  </div>
                                  </div>
                                  
                                  <h4>ตำแหน่งของร้าน</h4>
                                  
                              
                                  <div class="modal-body  border-0 justify-content-center ">

                                      <div class="mapouter "><div class="gmap_canvas"><iframe width="430" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=<?php echo $row['latitude'];?>%2C<?php echo $row['longitude'];?>&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div>
                              
                                    </div>
                                    </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                              
                  </modal2>
<?php }
 $no=1; $num=0; $menu_total=0; $i=0; 
 ?>
          
<?php
if ( empty($temp_r) ) {       
  $temp =" SELECT * FROM menu  WHERE partner_id_fk = '".$id."' ORDER BY `menu_id` DESC   ; ";
  $result_temp = $conn->query($temp)  or die($conn->error);

            while( $row_temp= $result_temp->fetch_assoc()){ 
           //   while( $row_menu= $result_temp->fetch_assoc()){     
    
            
  ?>
                  <form method="GET" action="./my_cart.php" name="form1">
                  <input class="in-price" type="hidden" name="get"  id="menu_id" value="<?php echo $_GET['member_id'];?>">

                <div class="jumbotron jumbotron mb-3 bg-transparent shadow-sm  " style="padding-top:1.25em; padding-bottom: 1.25em; "> 
                    <div class="container">
                        
                          <div class="row justify-content-left">
                            <div class="col-5 v" name="row_menu[]" ><?php echo $row_temp['menu_name'];?></div>
                            <div class="col-1"  ><?php echo $row_temp['price'];?></div>
                            
                            <div class="col-3">
                            <input class="in-price" type="hidden" name="menu_id[]"  id="menu_id" value="<?php echo $row_temp['menu_id'];?>">

                            <input class="in-price" type="hidden" name="menu_name[]"  id="menu_name" value="<?php echo $row_temp['menu_name'];?>">

                                <input class="in-price" type="hidden" name="price[]"  id="price" value="<?php echo $row_temp['price'];?>">
                                <input class="in-price" type="hidden" name="avalable[]"  id="avalable" value="<?php echo $row_temp['avalable'];?>">

                                <input class="form-control bg-transperant" type="number" name="qty[]" id="qty" value="0"min="0" max="100" step="1"   <?php if ($row_temp['avalable'] == '0'){ echo "readonly"; }?> />
                                

                            </div>
                            <div class="col-2">
                            </div>
                          </div>
          
                      </div>
                      
                  </div>
                               
                  <?php 

$no++;
$i++;
 
}?>
                      <div class="container  " >
<div class="row justify-content-center " >
                          <input class="btn btn-primary text-white" type="submit" name="checkprice" id="no" value="คำนวณราคาสินค้า" ></button>
                        </div>                        
                        <div class="row align-content-center align-items-sm-baseline align-items-sm-center  ">  
                        </form>
                        </div>
                      </div>
                    </div>

                    
<?php
}else{ 
   $temp ="SELECT * FROM temp_price   WHERE EXISTS (SELECT * FROM menu)  ORDER BY `menu_id` DESC ";
  $result_temp = $conn->query($temp)  or die($conn->error);
$totaly =0;
            while( $row_temp= $result_temp->fetch_assoc()){ 
           //   while( $row_menu= $result_temp->fetch_assoc()){     
    
            
  ?>
                  <form method="GET" action="./my_cart.php" name="form1">
                  <input class="in-price" type="hidden" name="get"  id="menu_id" value="<?php echo $_GET['member_id'];?>">

                <div class="jumbotron jumbotron mb-3 bg-transparent shadow-sm  " style="padding-top:1.25em; padding-bottom: 1.25em; "> 
                    <div class="container">
                        
                          <div class="row justify-content-left">
                            <div class="col-5 v" name="row_menu[]" ><?php echo $row_temp['menu_name'];?></div>
                            <div class="col-1"  ><?php echo $row_temp['price_def'];?></div>
                            
                            <div class="col-3">
                            <input class="in-price" type="hidden" name="menu_id[]"  id="menu_id" value="<?php echo $row_temp['menu_id'];?>">

                            <input class="in-price" type="hidden" name="menu_name[]"  id="menu_name" value="<?php echo $row_temp['menu_name'];?>">

                                <input class="in-price" type="hidden" name="price[]"  id="price" value="<?php echo $row_temp['price_def'];?>">
                                <input class="in-price" type="hidden" name="price_def[]"  id="price_def" value="<?php echo $row_temp['price_def'];?>">

                                <input class="in-price" type="hidden" name="avalable[]"  id="avalable" value="<?php echo $row_temp['avalable'];?>">

                                <input class="form-control bg-transperant" type="number" name="qty[]" id="qty" min="0" max="100" step="1"  value="<?php echo $row_temp["unit"]; ?>"  <?php if ($row_temp['avalable'] == '0'){ echo "readonly"; }?> />
                                

                            </div>
                            <div class="col-2">
                            <input class="form-control disabled" name="menu_total[]" id="menu_total" type="hidden"  value="<?php echo $row_temp['price'];?>" >
                            <p  ><?php echo $row_temp['price'];?> บาท</p>

                            </div>
                          </div>
          
                      </div>
                      
                  </div>
                  <input class="" type="hidden" name="id" id="no"  value="<?php echo $id;?> " > 
                  <?php 

$no++;
$i++;
$totaly+=$row_temp['price'];

}?>

<div class="container mb-3 align-items-sm-center " >
<div class="row justify-content-center  float-right  mr-5 " >
<h5>    ราคารวมทั้งหมด <input class="" type="hidden" name="total" id="no"  value="<?php echo $totaly;?> " >     <?php echo $totaly;?> บาท</h5>
                        </div>                        
                        <div class="row align-content-center align-items-sm-baseline align-items-sm-center  justify-content-center ">  
                        <input class="btn btn-primary text-white"  type="submit" name="checkprice" id="no" value="คำนวณราคาสินค้า" ></button>

                        </div>
                      </div>
                    </div>


                       
                        


<?php
}

?>
                      

                 



                    
                    
                    
                    
                    
                    
                    <?php if (isset($_SESSION['telephone'])) {?>
                    <div class="jumbotron jumbotron bg-transparent shadow-sm " style="padding-top:0.75em; padding-bottom: 0.75em; "></div>

                    <footer class="fixed-bottom">
                        <div id="footer">
                                <div class="container ">
            
                                  <button type="submit" name="cart" id="cart" class="btn btn-primary footer-block w-100 sticky-top text-white colorbtn " 
                                   role="button" style="padding-top: 1em; padding-bottom: 1em;"  >
                                 

                                    <div class="lead">สรุปการสั่งซื้อ</div>
                                    
                                  </button>
            
                                </div>
            
                              </div>
    
                            </footer>
                            <?php }
                            else{ ?>
                              <div class="jumbotron jumbotron bg-transparent shadow-sm " style="padding-top:0.75em; padding-bottom: 0.75em; "></div>

<footer class="fixed-bottom">
    <div id="footer">
            <div class="container ">

              <a name="่" id="" class="btn btn-primary footer-block w-100 sticky-top text-white colorbtn " 
              href="#" role="button" style="padding-top: 1em; padding-bottom: 1em;"
              data-toggle="modal" 
                data-target="#modalSigninForm">
             

                <div class="lead">เข้าสู่ระบบ</div>
                
              </a>

            </div>

          </div>

        </footer>
        
        </form>
                           <?php } ?>
                           






    

                  



                  
                
 

<script>

</script>
<?php require_once('../section/script.php'); ?>
<?php 
$delete_temp= "DELETE FROM temp_price ";
$_resule_del = $conn->query($delete_temp) or die($conn->error);
?>